<!DOCTYPE html>
<html>
<head>
    <title></title>
	<meta charset="utf-8" />
</head>
<body>
	<?php
        if(isset($_POST['CompanyName'])) {
			//$data = json_encode(get_object_vars($formData));
            $data = '{'. "\n" . 
			'    "RecordsReady": ' . $_POST['RecordsReady']. "," . "\n" .
			'    "RecordsNotReady": ' . $_POST['RecordsNotReady']. "," . "\n\n" .
			'    "RecordPotentialReady": ' . $_POST['RecordPotentialReady']. "," . "\n" .
			'    "RecordPotentialNotReady": ' . $_POST['RecordPotentialNotReady']. "," . "\n\n" .
			'    "FoundationBeforeSegmentable": ' . $_POST['FoundationBeforeSegmentable']. "," . "\n" .
			'    "FoundationBeforeProspectable": ' . $_POST['FoundationBeforeProspectable']. "," . "\n" .
			'    "FoundationBeforeResearchable": ' . $_POST['FoundationBeforeResearchable']. "," . "\n" .
			'    "FoundationBeforeUnusable": ' . $_POST['FoundationBeforeUnusable']. "," . "\n\n" .
			'    "FoundationAfterSegmentable": ' . $_POST['FoundationAfterSegmentable']. "," . "\n" .
			'    "FoundationAfterProspectable": ' . $_POST['FoundationAfterProspectable']. "," . "\n" .
			'    "FoundationAfterResearchable": ' . $_POST['FoundationAfterResearchable']. "," . "\n" .
			'    "FoundationAfterRemove": ' . $_POST['FoundationAfterRemove']. "," . "\n\n" .
			'    "DomainsSupplied": ' . $_POST['DomainsSupplied']. "," . "\n" .
			'    "DomainsBlank": ' . $_POST['DomainsBlank']. "," . "\n\n" .
			'    "DomainsGood": ' . $_POST['DomainsGood']. "," . "\n" .
			'    "DomainsBad": ' . $_POST['DomainsBad']. "," . "\n\n" .
			'    "CorrectedDomainUsable": ' . $_POST['CorrectedDomainUsable']. "," . "\n" .
			'    "CorrectedDomainNoWebsite": ' . $_POST['CorrectedDomainNoWebsite']. "," . "\n\n" .
			'    "CorrectedDomainGood": ' . $_POST['CorrectedDomainGood']. "," . "\n" .
			'    "CorrectedDomainFilled": ' . $_POST['CorrectedDomainFilled']. "," . "\n" .
			'    "CorrectedDomains": ' . $_POST['CorrectedDomains']. "," . "\n\n" .
			'    "CompanyNameAnalysisHigh": ' . $_POST['CompanyNameAnalysisHigh']. "," . "\n" .
			'    "CompanyNameAnalysisMedium": ' . $_POST['CompanyNameAnalysisMedium']. "," . "\n" .
			'    "CompanyNameAnalysisLow": ' . $_POST['CompanyNameAnalysisLow']. "," . "\n" .
			'    "CompanyNameAnalysisNone": ' . $_POST['CompanyNameAnalysisNone']. "," . "\n\n" .
			'    "SocialSample": ' . $_POST['SocialSample']. "," . "\n" .
			'    "SocialFirmagraphics": ' . $_POST['SocialFirmagraphics']. "," . "\n" .
			'    "SocialLinkedin": ' . $_POST['SocialLinkedin']. "," . "\n" .
			'    "SocialFacebook": ' . $_POST['SocialFacebook']. "," . "\n" .
			'    "SocialTwitter": ' . $_POST['SocialTwitter']. "," . "\n" .
			'    "SocialTotal": ' . $_POST['SocialTotal']. "," . "\n\n" .
			'    "ContactSample": ' . $_POST['ContactSample']. "," . "\n" .
			'    "ContactEmails": ' . $_POST['ContactEmails']. "," . "\n" .
			'    "ContactPhones": ' . $_POST['ContactPhones']. "," . "\n" .
			'    "ContactAddresses": ' . $_POST['ContactAddresses']. "," . "\n" .
			'    "ContactTitles": ' . $_POST['ContactTitles']. "," . "\n" .
			'    "ContactSocial": ' . $_POST['ContactSocial']. "," . "\n" .
			'    "ContactEffected": ' . $_POST['ContactEffected']. "," . "\n\n" .
			'    "WebsiteContactsTotal": ' . $_POST['WebsiteContactsTotal']. "," . "\n" .
			'    "WebsiteContactsFilled": ' . $_POST['WebsiteContactsFilled']. "," . "\n\n" .
			'    "BeforeDeptExec": ' . $_POST['BeforeDeptExec']. "," . "\n" .
			'    "BeforeDeptSales": ' . $_POST['BeforeDeptSales']. "," . "\n" .
			'    "BeforeDeptMarketing": ' . $_POST['BeforeDeptMarketing']. "," . "\n" .
			'    "BeforeDeptFinance": ' . $_POST['BeforeDeptFinance']. "," . "\n" .
			'    "BeforeDeptIT": ' . $_POST['BeforeDeptIT']. "," . "\n" .
			'    "BeforeDeptLegal": ' . $_POST['BeforeDeptLegal']. "," . "\n" .
			'    "BeforeDeptAdmin": ' . $_POST['BeforeDeptAdmin']. "," . "\n" .
			'    "BeforeDeptCommunications": ' . $_POST['BeforeDeptCommunications']. "," . "\n" .
			'    "BeforeDeptDeveloper": ' . $_POST['BeforeDeptDeveloper']. "," . "\n" .
			'    "BeforeDeptCustomerService": ' . $_POST['BeforeDeptCustomerService']. "," . "\n" .
			'    "BeforeDeptHumanResources": ' . $_POST['BeforeDeptHumanResources']. "," . "\n" .
			'    "BeforeDeptOperations": ' . $_POST['BeforeDeptOperations']. "," . "\n" .
			'    "BeforeDeptPR": ' . $_POST['BeforeDeptPR']. "," . "\n" .
			'    "BeforeDeptStrategy": ' . $_POST['BeforeDeptStrategy']. "," . "\n" .
			'    "BeforeDeptOther": ' . $_POST['BeforeDeptOther']. "," . "\n\n" .
			'    "BeforeTitleBoard": ' . $_POST['BeforeTitleBoard']. "," . "\n" .
			'    "BeforeTitleSVP": ' . $_POST['BeforeTitleSVP']. "," . "\n" .
			'    "BeforeTitlePresident": ' . $_POST['BeforeTitlePresident']. "," . "\n" .
			'    "BeforeTitleVP": ' . $_POST['BeforeTitleVP']. "," . "\n" .
			'    "BeforeTitleDirector": ' . $_POST['BeforeTitleDirector']. "," . "\n" .
			'    "BeforeTitleManager": ' . $_POST['BeforeTitleManager']. "," . "\n" .
			'    "BeforeTitleStaff": ' . $_POST['BeforeTitleStaff']. "," . "\n" .
			'    "BeforeTitleAdmin": ' . $_POST['BeforeTitleAdmin']. "," . "\n" .
			'    "BeforeTitleOther": ' . $_POST['BeforeTitleOther']. "," . "\n\n" .
			'    "AfterDeptExec": ' . $_POST['AfterDeptExec']. "," . "\n" .
			'    "AfterDeptSales": ' . $_POST['AfterDeptSales']. "," . "\n" .
			'    "AfterDeptMarketing": ' . $_POST['AfterDeptMarketing']. "," . "\n" .
			'    "AfterDeptFinance": ' . $_POST['AfterDeptFinance']. "," . "\n" .
			'    "AfterDeptIT": ' . $_POST['AfterDeptIT']. "," . "\n" .
			'    "AfterDeptLegal": ' . $_POST['AfterDeptLegal']. "," . "\n" .
			'    "AfterDeptAdmin": ' . $_POST['AfterDeptAdmin']. "," . "\n" .
			'    "AfterDeptCommunications": ' . $_POST['AfterDeptCommunications']. "," . "\n" .
			'    "AfterDeptDeveloper": ' . $_POST['AfterDeptDeveloper']. "," . "\n" .
			'    "AfterDeptCustomerService": ' . $_POST['AfterDeptCustomerService']. "," . "\n" .
			'    "AfterDeptHumanResources": ' . $_POST['AfterDeptHumanResources']. "," . "\n" .
			'    "AfterDeptOperations": ' . $_POST['AfterDeptOperations']. "," . "\n" .
			'    "AfterDeptPR": ' . $_POST['AfterDeptPR']. "," . "\n" .
			'    "AfterDeptStrategy": ' . $_POST['AfterDeptStrategy']. "," . "\n" .
			'    "AfterDeptOther": ' . $_POST['AfterDeptOther']. "," . "\n\n" .
			'    "AfterTitleBoard": ' . $_POST['AfterTitleBoard']. "," . "\n" .
			'    "AfterTitleSVP": ' . $_POST['AfterTitleSVP']. "," . "\n" .
			'    "AfterTitlePresident": ' . $_POST['AfterTitlePresident']. "," . "\n" .
			'    "AfterTitleVP": ' . $_POST['AfterTitleVP']. "," . "\n" .
			'    "AfterTitleDirector": ' . $_POST['AfterTitleDirector']. "," . "\n" .
			'    "AfterTitleManager": ' . $_POST['AfterTitleManager']. "," . "\n" .
			'    "AfterTitleStaff": ' . $_POST['AfterTitleStaff']. "," . "\n" .
			'    "AfterTitleAdmin": ' . $_POST['AfterTitleAdmin']. "," . "\n" .
			'    "AfterTitleOther": ' . $_POST['AfterTitleOther']. "\n" .
			'}';
            //$ret = file_put_contents('data/'. $today . '-' . $_POST['CompanyName'] . '.json', $data, FILE_APPEND);
			$ret = file_put_contents('data/' . $_POST['CompanyName'] . '.json', $data, FILE_APPEND);
            if($ret === false) {
                die('There was an error writing this file');
            } else {
                header();
            }
        } else {
            die('no post data to process');
        }
    ?>
</body>
</html>
