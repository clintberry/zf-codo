<template OverwriteFlag="false" DocrootFlag="false" DirectorySuffix="" TargetDirectory="<%= __VIEWS__ . "/" . strtolower($objTable->FileName) %>" TargetFileName="create.phtml"/>
<h1>Create <%= ucfirst($objTable->Name) %></h1>
<?= $this->form; ?>