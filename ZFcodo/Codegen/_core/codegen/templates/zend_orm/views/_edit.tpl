<template OverwriteFlag="false" DocrootFlag="false" DirectorySuffix="" TargetDirectory="<%= __VIEWS__ . "/" . strtolower($objTable->FileName) %>" TargetFileName="edit.phtml"/>
<h1>Edit <%= ucfirst($objTable->Name) %></h1>
<?= $this->form; ?>