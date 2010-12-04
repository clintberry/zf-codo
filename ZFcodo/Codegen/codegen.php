<?php
	// Load in the QCodeGen Class
	require(__QCUBED__ . '/QCodeGen.class.php');

	// Security check for ALLOW_REMOTE_ADMIN
	// To allow access REGARDLESS of ALLOW_REMOTE_ADMIN, simply remove the line below
	//QApplication::CheckRemoteAdmin();

	/////////////////////////////////////////////////////
	// Run CodeGen, using the ./codegen_settings.xml file
	/////////////////////////////////////////////////////
	QCodeGen::Run(__CONFIGURATION__ . '/codegen_settings.xml');

	function DisplayMonospacedText($strText) {
		//$strText = htmlentities($strText);
		//$strText = str_replace('	', '    ', $strText);
		//$strText = str_replace(' ', '&nbsp;', $strText);
		//$strText = str_replace("\r", '', $strText);
		//$strText = str_replace("\n", '<br/>', $strText);

		_p($strText, false);
	}

	//////////////////
	// Output the Page
	//////////////////
    if ($strErrors = QCodeGen::$RootErrors) 
    {
        echo "\nThe following root errors were reported:\n";
        DisplayMonospacedText($strErrors);
    } 
    else 
    {
        echo "\nCodeGen Settings (as evaluated from" . _p(QCodeGen::$SettingsFilePath); 
        DisplayMonospacedText(QCodeGen::GetSettingsXml());
    }
    
    foreach (QCodeGen::$CodeGenArray as $objCodeGen) 
    {
        _p($objCodeGen->GetTitle());
        _p($objCodeGen->GetReportLabel());
        DisplayMonospacedText($objCodeGen->GenerateAll()); 
        if ($strErrors = $objCodeGen->Errors)
        {
            echo "\nThe following errors were reported:\n";
            DisplayMonospacedText($objCodeGen->Errors);
        }
    }
				
	foreach (QCodeGen::GenerateAggregate() as $strMessage) 
	{
		_p($strMessage); 
	}
