<?php

namespace App\Http\Controllers;

use Google_Client;
use Illuminate\Http\Request;

use App\Http\Requests;
use Illuminate\Support\Facades\Session;

class GoogleAnalyticsController extends Controller
{

    /**
     * @return \Google_Service_AnalyticsReporting
     */
    private function initializeAnalytics()
    {

        // Use the developers console and download your service account
        // credentials in JSON format. Place them in this directory or
        // change the key file location if necessary.
        $KEY_FILE_LOCATION = base_path().'/vendor/google/auth/src/Credentials/Harita-0a6a29966478.json';

        // Create and configure a new client object.
        $client = new Google_Client();
        $client->setApplicationName("Hello Analytics Reporting");
        $client->setAuthConfig($KEY_FILE_LOCATION);
        $client->setScopes(['https://www.googleapis.com/auth/analytics.readonly']);

        $client->refreshTokenWithAssertion();
        $token = $client->getAccessToken();
        $accessToken = $token['access_token'];

        $analytics = new \Google_Service_AnalyticsReporting($client);

        return $analytics;
    }

    //en çok kullanılan 5 tarayıcının listesi
    public function browserDataset(){
        function getBrowserListReport($analytics) {

            // Replace with your view ID, for example XXXX.
            $VIEW_ID = "134311449";

            // Create the DateRange object.
            $dateRange = new \Google_Service_AnalyticsReporting_DateRange();
            $dateRange->setStartDate("30daysAgo");
            $dateRange->setEndDate("today");

            // Create the Metrics object.
            $sessions = new \Google_Service_AnalyticsReporting_Metric();
            $sessions->setExpression("ga:pageviews");

            //Create the Dimensions object.
            $browser = new \Google_Service_AnalyticsReporting_Dimension();
            $browser->setName("ga:browser");

//        $country = new \Google_Service_AnalyticsReporting_Dimension();
//        $country->setName("ga:browser");

            // Create the DimensionFilter.
            /*$dimensionFilter = new \Google_Service_AnalyticsReporting_DimensionFilter();
            $dimensionFilter->setDimensionName('ga:browser');
            $dimensionFilter->setOperator('EXACT');
            $dimensionFilter->setExpressions(array('Chrome'));

            // Create the DimensionFilterClauses
            $dimensionFilterClause = new \Google_Service_AnalyticsReporting_DimensionFilterClause();
            $dimensionFilterClause->setFilters(array($dimensionFilter));*/

            $ordering = new \Google_Service_AnalyticsReporting_OrderBy();
            $ordering->setFieldName("ga:pageviews");
            $ordering->setOrderType("VALUE");
            $ordering->setSortOrder("DESCENDING");

            // Create the ReportRequest object.
            $request = new \Google_Service_AnalyticsReporting_ReportRequest();
            $request->setViewId($VIEW_ID);
            $request->setDateRanges($dateRange);
            $request->setMetrics(array($sessions));
            $request->setDimensions(array($browser));
            $request->setOrderBys(array($ordering));
            $request->setPageSize(5);
            //$request->setDimensionFilterClauses(array($dimensionFilterClause));

            $body = new \Google_Service_AnalyticsReporting_GetReportsRequest();
            $body->setReportRequests( array( $request) );
            return $analytics->reports->batchGet( $body );
        }

        function printBrowserListResults($reports) {
            $result = [];
            for ( $reportIndex = 0; $reportIndex < count( $reports ); $reportIndex++ ) {
                $report = $reports[ $reportIndex ];
                $header = $report->getColumnHeader();
                $dimensionHeaders = $header->getDimensions();
                $metricHeaders = $header->getMetricHeader()->getMetricHeaderEntries();
                $rows = $report->getData()->getRows();

                for ( $rowIndex = 0; $rowIndex < count($rows); $rowIndex++) {
                    $row = $rows[ $rowIndex ];
                    $dimensions = $row->getDimensions();
                    $metrics = $row->getMetrics();
                    for ($i = 0; $i < count($dimensionHeaders) && $i < count($dimensions); $i++) {
                        $result[$dimensions[$i]] = '';
                        //print($dimensionHeaders[$i] . ": " . $dimensions[$i] . "\n");
                    }

                    for ($j = 0; $j < count($metrics); $j++) {
                        $values = $metrics[$j]->getValues();
                        for ($k = 0; $k < count($values); $k++) {
                            $entry = $metricHeaders[$k];
                            $result[$dimensions[$j]] = $values[$k];
                            //print($entry->getName() . ": " . $values[$k] . "\n");
                        }
                    }
                }
            }
            return $result;
        }

        $analytics = $this->initializeAnalytics();
        $response = getBrowserListReport($analytics);
        $dataset = printBrowserListResults($response);

        return $dataset;

    }

    public function lastThisWeekDataset(){

        function getLastThisWeekListReport($analytics) {

            // Replace with your view ID, for example XXXX.
            $VIEW_ID = "134311449";

            // Create the DateRange object.
            $dateRange = new \Google_Service_AnalyticsReporting_DateRange();
            $dateRange->setStartDate("14daysAgo");
            $dateRange->setEndDate("yesterday");

            // Create the Metrics object.
            $sessions = new \Google_Service_AnalyticsReporting_Metric();
            $sessions->setExpression("ga:sessions");

            //Create the Dimensions object.
            $date = new \Google_Service_AnalyticsReporting_Dimension();
            $date->setName("ga:nthDay");

            // Create the ReportRequest object.
            $request = new \Google_Service_AnalyticsReporting_ReportRequest();
            $request->setViewId($VIEW_ID);
            $request->setDateRanges($dateRange);
            $request->setMetrics(array($sessions));
            $request->setDimensions(array($date));

            $body = new \Google_Service_AnalyticsReporting_GetReportsRequest();
            $body->setReportRequests( array( $request) );
            return $analytics->reports->batchGet( $body );
        }

        function printLastThisWeekResults($reports) {
            $result = [];
            for ( $reportIndex = 0; $reportIndex < count( $reports ); $reportIndex++ ) {
                $report = $reports[ $reportIndex ];
                $header = $report->getColumnHeader();
                $dimensionHeaders = $header->getDimensions();
                $metricHeaders = $header->getMetricHeader()->getMetricHeaderEntries();
                $rows = $report->getData()->getRows();

                for ( $rowIndex = 0; $rowIndex < count($rows); $rowIndex++) {
                    $row = $rows[ $rowIndex ];
                    $dimensions = $row->getDimensions();
                    $metrics = $row->getMetrics();
                    for ($i = 0; $i < count($dimensionHeaders) && $i < count($dimensions); $i++) {
                        $result[$dimensions[$i]] = '';

                    }

                    for ($j = 0; $j < count($metrics); $j++) {
                        $values = $metrics[$j]->getValues();
                        for ($k = 0; $k < count($values); $k++) {
                            $entry = $metricHeaders[$k];
                            $result[$dimensions[$j]] = $values[$k];

                        }
                    }
                }
            }
            return $result;
        }

        $analytics = $this->initializeAnalytics();
        $response = getLastThisWeekListReport($analytics);
        $dataset = printLastThisWeekResults($response);

        return $dataset;

    }

    public function embed()
    {
        $this->getAccessToken();
        return view('admin.embed');
    }

    public function getAccessToken()
    {
        // Use the developers console and download your service account
        // credentials in JSON format. Place them in this directory or
        // change the key file location if necessary.
        $KEY_FILE_LOCATION = base_path().'/vendor/google/auth/src/Credentials/Harita-0a6a29966478.json';

        // Create and configure a new client object.
        $client = new Google_Client();
        $client->setApplicationName("Hello Analytics Reporting");
        $client->setAuthConfig($KEY_FILE_LOCATION);
        $client->setScopes(['https://www.googleapis.com/auth/analytics.readonly']);

        $client->refreshTokenWithAssertion();
        $token = $client->getAccessToken();

        Session::set('google-access-token', $token['access_token']);
        Session::set('google-token_type', $token['token_type']);
        Session::set('google-expires_in', $token['expires_in']);

        return true;
    }

}
