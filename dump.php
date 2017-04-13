/*$date = new DateTime();
			$today = $date->format('Y-m-d');
			$generateID = function(){
				if (function_exists('com_create_guid')){
					return com_create_guid();
				} else {
					mt_srand((double)microtime()*10000);//optional for php 4.2.0 and up.
					$charid = strtoupper(md5(uniqid(rand(), true)));
					$hyphen = chr(45);// "-"
					$uuid = chr(123)// "{"
						.substr($charid, 0, 8).$hyphen
						.substr($charid, 8, 4).$hyphen
						.substr($charid,12, 4).$hyphen
						.substr($charid,16, 4).$hyphen
						.substr($charid,20,12)
						.chr(125);// "}"
					return $uuid;
				}
			}
			class postData {

				public RecordsReady;
				public RecordsNotReady;

				public RecordPotentialReady;
				public RecordPotentialNotReady;

				public FoundationBeforeSegmentable;
				public FoundationBeforeProspectable;
				public FoundationBeforeResearchable;
				public FoundationBeforeUnusable;

				public FoundationAfterSegmentable;
				public FoundationAfterProspectable;
				public FoundationAfterResearchable;
				public FoundationAfterRemove;

				public DomainsSupplied;
				public DomainsBlank;

				public DomainsGood;
				public DomainsBad;

				public CorrectedDomainUsable;
				public CorrectedDomainNoWebsite;

				public CorrectedDomainGood;
				public CorrectedDomainFilled;
				public CorrectedDomains;

				public CompanyNameAnalysisHigh;
				public CompanyNameAnalysisMedium;
				public CompanyNameAnalysisLow;
				public CompanyNameAnalysisNone;

				public SocialSample;
				public SocialFirmagraphics;
				public SocialLinkedin;
				public SocialFacebook;
				public SocialTwitter;
				public SocialTotal;

				public ContactSample;
				public ContactEmails;
				public ContactPhones;
				public ContactAddresses;
				public ContactTitles;
				public ContactSocial;
				public ContactEffected;

				public WebsiteContactsTotal;
				public WebsiteContactsFilled;

				public BeforeDeptExec;
				public BeforeDeptSales;
				public BeforeDeptMarketing;
				public BeforeDeptFinance;
				public BeforeDeptIT;
				public BeforeDeptLegal;
				public BeforeDeptAdmin;
				public BeforeDeptCommunications;
				public BeforeDeptDeveloper;
				public BeforeDeptCustomerService;
				public BeforeDeptHumanResources;
				public BeforeDeptOperations;
				public BeforeDeptPR;
				public BeforeDeptStrategy;
				public BeforeDeptOther;
  
				public BeforeTitleBoard;
				public BeforeTitleSVP;
				public BeforeTitlePresident;
				public BeforeTitleVP;
				public BeforeTitleDirector;
				public BeforeTitleManager;
				public BeforeTitleStaff;
				public BeforeTitleAdmin;
				public BeforeTitleOther;

				public AfterDeptExec;
				public AfterDeptSales;
				public AfterDeptMarketing;
				public AfterDeptFinance;
				public AfterDeptIT;
				public AfterDeptLegal;
				public AfterDeptAdmin;
				public AfterDeptCommunications;
				public AfterDeptDeveloper;
				public AfterDeptCustomerService;
				public AfterDeptHumanResources;
				public AfterDeptOperations;
				public AfterDeptPR;
				public AfterDeptStrategy;
				public AfterDeptOther;
  
				public AfterTitleBoard;
				public AfterTitleSVP;
				public AfterTitlePresident;
				public AfterTitleVP;
				public AfterTitleDirector;
				public AfterTitleManager;
				public AfterTitleStaff;
				public AfterTitleAdmin;
				public AfterTitleOther;

				public function __construct(
					$RecordsReady,
					$RecordsNotReady,
					$RecordPotentialReady,
					$RecordPotentialNotReady,
					$FoundationBeforeSegmentable,
					$FoundationBeforeProspectable,
					$FoundationBeforeResearchable,
					$FoundationBeforeUnusable,
					$FoundationAfterSegmentable,
					$FoundationAfterProspectable,
					$FoundationAfterResearchable,
					$FoundationAfterRemove,
					$DomainsSupplied,
					$DomainsBlank,
					$DomainsGood,
					$DomainsBad,
					$CorrectedDomainUsable,
					$CorrectedDomainNoWebsite,
					$CorrectedDomainGood,
					$CorrectedDomainFilled,
					$CorrectedDomains,
					$CompanyNameAnalysisHigh,
					$CompanyNameAnalysisMedium,
					$CompanyNameAnalysisLow,
					$CompanyNameAnalysisNone,
					$SocialSample,
					$SocialFirmagraphics,
					$SocialLinkedin,
					$SocialFacebook,
					$SocialTwitter,
					$SocialTotal,
					$ContactSample,
					$ContactEmails,
					$ContactPhones,
					$ContactAddresses,
					$ContactTitles,
					$ContactSocial,
					$ContactEffected,
					$WebsiteContactsTotal,
					$WebsiteContactsFilled,
					$BeforeDeptExec,
					$BeforeDeptSales,
					$BeforeDeptMarketing,
					$BeforeDeptFinance,
					$BeforeDeptIT,
					$BeforeDeptLegal,
					$BeforeDeptAdmin,
					$BeforeDeptCommunications,
					$BeforeDeptDeveloper,
					$BeforeDeptCustomerService,
					$BeforeDeptHumanResources,
					$BeforeDeptOperations,
					$BeforeDeptPR,
					$BeforeDeptStrategy,
					$BeforeDeptOther,
					$BeforeTitleBoard,
					$BeforeTitleSVP,
					$BeforeTitlePresident,
					$BeforeTitleVP,
					$BeforeTitleDirector,
					$BeforeTitleManager,
					$BeforeTitleStaff,
					$BeforeTitleAdmin,
					$BeforeTitleOther,
					$AfterDeptExec,
					$AfterDeptSales,
					$AfterDeptMarketing,
					$AfterDeptFinance,
					$AfterDeptIT,
					$AfterDeptLegal,
					$AfterDeptAdmin,
					$AfterDeptCommunications,
					$AfterDeptDeveloper,
					$AfterDeptCustomerService,
					$AfterDeptHumanResources,
					$AfterDeptOperations,
					$AfterDeptPR,
					$AfterDeptStrategy,
					$AfterDeptOther,
					$AfterTitleBoard,
					$AfterTitleSVP,
					$AfterTitlePresident,
					$AfterTitleVP,
					$AfterTitleDirector,
					$AfterTitleManager,
					$AfterTitleStaff,
					$AfterTitleAdmin,
					$AfterTitleOther
				){
					'    "RecordsReady": ' . $_POST['RecordsReady'] . "\n" .
					'    "RecordsNotReady": ' . $_POST['RecordsNotReady'] . "\n\n" .
					'    "RecordPotentialReady": ' . $_POST['RecordPotentialReady'] . "\n" .
					'    "RecordPotentialNotReady": ' . $_POST['RecordPotentialNotReady'] . "\n\n" .
					'    "FoundationBeforeSegmentable": ' . $_POST['FoundationBeforeSegmentable'] . "\n" .
					'    "FoundationBeforeProspectable": ' . $_POST['FoundationBeforeProspectable'] . "\n" .
					'    "FoundationBeforeResearchable": ' . $_POST['FoundationBeforeResearchable'] . "\n" .
					'    "FoundationBeforeUnusable": ' . $_POST['FoundationBeforeUnusable'] . "\n\n" .
					'    "FoundationAfterSegmentable": ' . $_POST['FoundationAfterSegmentable'] . "\n" .
					'    "FoundationAfterProspectable": ' . $_POST['FoundationAfterProspectable'] . "\n" .
					'    "FoundationAfterResearchable": ' . $_POST['FoundationAfterResearchable'] . "\n" .
					'    "FoundationAfterRemove": ' . $_POST['FoundationAfterRemove'] . "\n\n" .
					'    "DomainsSupplied": ' . $_POST['DomainsSupplied'] . "\n" .
					'    "DomainsBlank": ' . $_POST['DomainsBlank'] . "\n\n" .
					'    "DomainsGood": ' . $_POST['DomainsGood'] . "\n" .
					'    "DomainsBad": ' . $_POST['DomainsBad'] . "\n\n" .
					'    "CorrectedDomainUsable": ' . $_POST['CorrectedDomainUsable'] . "\n" .
					'    "CorrectedDomainNoWebsite": ' . $_POST['CorrectedDomainNoWebsite'] . "\n\n" .
					'    "CorrectedDomainGood": ' . $_POST['CorrectedDomainGood'] . "\n" .
					'    "CorrectedDomainFilled": ' . $_POST['CorrectedDomainFilled'] . "\n" .
					'    "CorrectedDomains": ' . $_POST['CorrectedDomains'] . "\n\n" .
					'    "CompanyNameAnalysisHigh": ' . $_POST['CompanyNameAnalysisHigh'] . "\n" .
					'    "CompanyNameAnalysisMedium": ' . $_POST['CompanyNameAnalysisMedium'] . "\n" .
					'    "CompanyNameAnalysisLow": ' . $_POST['CompanyNameAnalysisLow'] . "\n" .
					'    "CompanyNameAnalysisNone": ' . $_POST['CompanyNameAnalysisNone'] . "\n\n" .
					'    "SocialSample": ' . $_POST['SocialSample'] . "\n" .
					'    "SocialFirmagraphics": ' . $_POST['SocialFirmagraphics'] . "\n" .
					'    "SocialLinkedin": ' . $_POST['SocialLinkedin'] . "\n" .
					'    "SocialFacebook": ' . $_POST['SocialFacebook'] . "\n" .
					'    "SocialTwitter": ' . $_POST['SocialTwitter'] . "\n" .
					'    "SocialTotal": ' . $_POST['SocialTotal'] . "\n\n" .
					'    "ContactSample": ' . $_POST['ContactSample'] . "\n" .
					'    "ContactEmails": ' . $_POST['ContactEmails'] . "\n" .
					'    "ContactPhones": ' . $_POST['ContactPhones'] . "\n" .
					'    "ContactAddresses": ' . $_POST['ContactAddresses'] . "\n" .
					'    "ContactTitles": ' . $_POST['ContactTitles'] . "\n" .
					'    "ContactSocial": ' . $_POST['ContactSocial'] . "\n" .
					'    "ContactEffected": ' . $_POST['ContactEffected'] . "\n\n" .
					'    "WebsiteContactsTotal": ' . $_POST['WebsiteContactsTotal'] . "\n" .
					'    "WebsiteContactsFilled": ' . $_POST['WebsiteContactsFilled'] . "\n\n" .
					'    "BeforeDeptExec": ' . $_POST['BeforeDeptExec'] . "\n" .
					'    "BeforeDeptSales": ' . $_POST['BeforeDeptSales'] . "\n" .
					'    "BeforeDeptMarketing": ' . $_POST['BeforeDeptMarketing'] . "\n" .
					'    "BeforeDeptFinance": ' . $_POST['BeforeDeptFinance'] . "\n" .
					'    "BeforeDeptIT": ' . $_POST['BeforeDeptIT'] . "\n" .
					'    "BeforeDeptLegal": ' . $_POST['BeforeDeptLegal'] . "\n" .
					'    "BeforeDeptAdmin": ' . $_POST['BeforeDeptAdmin'] . "\n" .
					'    "BeforeDeptCommunications": ' . $_POST['BeforeDeptCommunications'] . "\n" .
					'    "BeforeDeptDeveloper": ' . $_POST['BeforeDeptDeveloper'] . "\n" .
					'    "BeforeDeptCustomerService": ' . $_POST['BeforeDeptCustomerService'] . "\n" .
					'    "BeforeDeptHumanResources": ' . $_POST['BeforeDeptHumanResources'] . "\n" .
					'    "BeforeDeptOperations": ' . $_POST['BeforeDeptOperations'] . "\n" .
					'    "BeforeDeptPR": ' . $_POST['BeforeDeptPR'] . "\n" .
					'    "BeforeDeptStrategy": ' . $_POST['BeforeDeptStrategy'] . "\n" .
					'    "BeforeDeptOther": ' . $_POST['BeforeDeptOther'] . "\n\n" .
					'    "BeforeTitleBoard": ' . $_POST['BeforeTitleBoard'] . "\n" .
					'    "BeforeTitleSVP": ' . $_POST['BeforeTitleSVP'] . "\n" .
					'    "BeforeTitlePresident": ' . $_POST['BeforeTitlePresident'] . "\n" .
					'    "BeforeTitleVP": ' . $_POST['BeforeTitleVP'] . "\n" .
					'    "BeforeTitleDirector": ' . $_POST['BeforeTitleDirector'] . "\n" .
					'    "BeforeTitleManager": ' . $_POST['BeforeTitleManager'] . "\n" .
					'    "BeforeTitleStaff": ' . $_POST['BeforeTitleStaff'] . "\n" .
					'    "BeforeTitleAdmin": ' . $_POST['BeforeTitleAdmin'] . "\n" .
					'    "BeforeTitleOther": ' . $_POST['BeforeTitleOther'] . "\n\n" .
					'    "AfterDeptExec": ' . $_POST['AfterDeptExec'] . "\n" .
					'    "AfterDeptSales": ' . $_POST['AfterDeptSales'] . "\n" .
					'    "AfterDeptMarketing": ' . $_POST['AfterDeptMarketing'] . "\n" .
					'    "AfterDeptFinance": ' . $_POST['AfterDeptFinance'] . "\n" .
					'    "AfterDeptIT": ' . $_POST['AfterDeptIT'] . "\n" .
					'    "AfterDeptLegal": ' . $_POST['AfterDeptLegal'] . "\n" .
					'    "AfterDeptAdmin": ' . $_POST['AfterDeptAdmin'] . "\n" .
					'    "AfterDeptCommunications": ' . $_POST['AfterDeptCommunications'] . "\n" .
					'    "AfterDeptDeveloper": ' . $_POST['AfterDeptDeveloper'] . "\n" .
					'    "AfterDeptCustomerService": ' . $_POST['AfterDeptCustomerService'] . "\n" .
					'    "AfterDeptHumanResources": ' . $_POST['AfterDeptHumanResources'] . "\n" .
					'    "AfterDeptOperations": ' . $_POST['AfterDeptOperations'] . "\n" .
					'    "AfterDeptPR": ' . $_POST['AfterDeptPR'] . "\n" .
					'    "AfterDeptStrategy": ' . $_POST['AfterDeptStrategy'] . "\n" .
					'    "AfterDeptOther": ' . $_POST['AfterDeptOther'] . "\n\n" .
					'    "AfterTitleBoard": ' . $_POST['AfterTitleBoard'] . "\n" .
					'    "AfterTitleSVP": ' . $_POST['AfterTitleSVP'] . "\n" .
					'    "AfterTitlePresident": ' . $_POST['AfterTitlePresident'] . "\n" .
					'    "AfterTitleVP": ' . $_POST['AfterTitleVP'] . "\n" .
					'    "AfterTitleDirector": ' . $_POST['AfterTitleDirector'] . "\n" .
					'    "AfterTitleManager": ' . $_POST['AfterTitleManager'] . "\n" .
					'    "AfterTitleStaff": ' . $_POST['AfterTitleStaff'] . "\n" .
					'    "AfterTitleAdmin": ' . $_POST['AfterTitleAdmin'] . "\n" .
					'    "AfterTitleOther": ' . $_POST['AfterTitleOther'] . "\n" .
				}
			
			}
			$formData = new postData(
				$_POST['RecordsReady'],
				$_POST['RecordsNotReady'],
				$_POST['RecordPotentialReady'],
				$_POST['RecordPotentialNotReady'],
				$_POST['FoundationBeforeSegmentable'],
				$_POST['FoundationBeforeProspectable'],
				$_POST['FoundationBeforeResearchable'],
				$_POST['FoundationBeforeUnusable'],
				$_POST['FoundationAfterSegmentable'],
				$_POST['FoundationAfterProspectable'],
				$_POST['FoundationAfterResearchable'],
				$_POST['FoundationAfterRemove'],
				$_POST['DomainsSupplied'],
				$_POST['DomainsBlank'],
				$_POST['DomainsGood'],
				$_POST['DomainsBad'],
				$_POST['CorrectedDomainUsable'],
				$_POST['CorrectedDomainNoWebsite'],
				$_POST['CorrectedDomainGood'],
				$_POST['CorrectedDomainFilled'],
				$_POST['CorrectedDomains'],
				$_POST['CompanyNameAnalysisHigh'],
				$_POST['CompanyNameAnalysisMedium'],
				$_POST['CompanyNameAnalysisLow'],
				$_POST['CompanyNameAnalysisNone'],
				$_POST['SocialSample'],
				$_POST['SocialFirmagraphics'],
				$_POST['SocialLinkedin'],
				$_POST['SocialFacebook'],
				$_POST['SocialTwitter'],
				$_POST['SocialTotal'],
				$_POST['ContactSample'],
				$_POST['ContactEmails'],
				$_POST['ContactPhones'],
				$_POST['ContactAddresses'],
				$_POST['ContactTitles'],
				$_POST['ContactSocial'],
				$_POST['ContactEffected'],
				$_POST['WebsiteContactsTotal'],
				$_POST['WebsiteContactsFilled'],
				$_POST['BeforeDeptExec'],
				$_POST['BeforeDeptSales'],
				$_POST['BeforeDeptMarketing'],
				$_POST['BeforeDeptFinance'],
				$_POST['BeforeDeptIT'],
				$_POST['BeforeDeptLegal'],
				$_POST['BeforeDeptAdmin'],
				$_POST['BeforeDeptCommunications'],
				$_POST['BeforeDeptDeveloper'],
				$_POST['BeforeDeptCustomerService'],
				$_POST['BeforeDeptHumanResources'],
				$_POST['BeforeDeptOperations'],
				$_POST['BeforeDeptPR'],
				$_POST['BeforeDeptStrategy'],
				$_POST['BeforeDeptOther'],
				$_POST['BeforeTitleBoard'],
				$_POST['BeforeTitleSVP'],
				$_POST['BeforeTitlePresident'],
				$_POST['BeforeTitleVP'],
				$_POST['BeforeTitleDirector'],
				$_POST['BeforeTitleManager'],
				$_POST['BeforeTitleStaff'],
				$_POST['BeforeTitleAdmin'],
				$_POST['BeforeTitleOther'],
				$_POST['AfterDeptExec'],
				$_POST['AfterDeptSales'],
				$_POST['AfterDeptMarketing'],
				$_POST['AfterDeptFinance'],
				$_POST['AfterDeptIT'],
				$_POST['AfterDeptLegal'],
				$_POST['AfterDeptAdmin'],
				$_POST['AfterDeptCommunications'],
				$_POST['AfterDeptDeveloper'],
				$_POST['AfterDeptCustomerService'],
				$_POST['AfterDeptHumanResources'],
				$_POST['AfterDeptOperations'],
				$_POST['AfterDeptPR'],
				$_POST['AfterDeptStrategy'],
				$_POST['AfterDeptOther'],
				$_POST['AfterTitleBoard'],
				$_POST['AfterTitleSVP'],
				$_POST['AfterTitlePresident'],
				$_POST['AfterTitleVP'],
				$_POST['AfterTitleDirector'],
				$_POST['AfterTitleManager'],
				$_POST['AfterTitleStaff'],
				$_POST['AfterTitleAdmin'],
				$_POST['AfterTitleOther']
			)*/

			class postData {

				public RecordsReady;
				public RecordsNotReady;

				public RecordPotentialReady;
				public RecordPotentialNotReady;

				public function __construct(
					$RecordsReady,
					$RecordsNotReady,
					$RecordPotentialReady,
					$RecordPotentialNotReady
				){
					$this->RecordsReady  = $RecordsReady;
					$this->RecordsNotReady  = $RecordsNotReady;
					$this->RecordPotentialReady  = $RecordPotentialReady;
					$this->RecordPotentialNotReady  = $RecordPotentialNotReady;
				}
			
			}

			$formData = new postData(
				$_POST['RecordsReady'],
				$_POST['RecordsNotReady'],
				$_POST['RecordPotentialReady'],
				$_POST['RecordPotentialNotReady']
			);