<?php
/*
#select sum(flag) from genebaskets where ip="JA1072439978" group by ip
#Change default gene basket
UPDATE genelist SET genelist_flag=0 where fingerprint="JA1072439978";
UPDATE genelist SET genelist_flag=1 where gene_basket_id=3 and fingerprint="JA1072439978";
select * from genelist where fingerprint="JA1072439978" 


UPDATE genelist SET genelist_flag=0 where fingerprint="JA1072439978";
UPDATE genelist SET genelist_flag=1 where gene_basket_id=3 and fingerprint="JA1072439978";
select * from genelist where fingerprint="JA1072439978" 


#Inster new gene basket and make it default
UPDATE genelist SET genelist_flag=0 where fingerprint="JA1072439978";
UPDATE genelist SET genelist_flag=1 where gene_basket_id=3 and fingerprint="JA1072439978";
select * from genelist where fingerprint="JA1072439978" 

#Inster new gene basket
INSERT INTO genelist(gene_basket_name,gene_list,fingerprint,genelist_time,genelist_flag)
VALUES ( "test list", "Eucgr.A00375,Eucgr.A02339,Eucgr.A02507,Eucgr.A02805,Eucgr.B01555,Eucgr.B01565,Eucgr.B02550,Eucgr.B03345,Eucgr.C00013,Eucgr.C01404,Eucgr.C03704,Eucgr.C04032,Eucgr.D00340,Eucgr.D02217,Eucgr.E00249,Eucgr.E02383,Eucgr.E02408,Eucgr.F02158,Eucgr.F02226,Eucgr.F03085,Eucgr.F03879,Eucgr.F03935,Eucgr.G00451,Eucgr.G01189,Eucgr.G02727,Eucgr.H00078,Eucgr.H02323,Eucgr.H02885,Eucgr.H02940,Eucgr.H04219,Eucgr.I00376,Eucgr.I01735,Eucgr.I02096,Eucgr.I02787,Eucgr.J00133,Eucgr.K00962,Eucgr.K01083,Eucgr.K01427,Eucgr.K01460,Eucgr.K02315,Eucgr.K02319,Eucgr.L02916","JA1072439978",NOW(),0);


INSERT INTO genelist(gene_basket_name,gene_list,fingerprint,genelist_time,genelist_flag)
VALUES ( "test list", "Eucgr.A00375,Eucgr.A02339,Eucgr.A02507,Eucgr.A02805,Eucgr.B01555,Eucgr.C00013,Eucgr.C01404,Eucgr.C03704,Eucgr.C04032,Eucgr.D00340,Eucgr.D02217,Eucgr.E00249,Eucgr.E02383,Eucgr.E02408,Eucgr.F02158,Eucgr.F02226,Eucgr.F03085,Eucgr.F03879,Eucgr.F03935,Eucgr.G00451,Eucgr.G01189,Eucgr.G02727,Eucgr.H00078,Eucgr.H02323,Eucgr.H02885,Eucgr.H02940,Eucgr.H04219,Eucgr.I00376,Eucgr.I01735,Eucgr.I02096,Eucgr.I02787,Eucgr.J00133,Eucgr.K00962,Eucgr.K01083,Eucgr.K01427,Eucgr.K01460,Eucgr.K02315,Eucgr.K02319,Eucgr.L02916","JA1072439978",NOW(),0);

INSERT INTO genelist(gene_basket_name,gene_list,fingerprint,genelist_time,genelist_flag)
VALUES ( "test list", "Eucgr.C03704,Eucgr.C04032,Eucgr.D00340,Eucgr.D02217,Eucgr.E00249,Eucgr.E02383,Eucgr.E02408,Eucgr.F02158,Eucgr.F02226,Eucgr.F03085,Eucgr.F03879,Eucgr.F03935,Eucgr.G00451,Eucgr.G01189,Eucgr.G02727,Eucgr.H00078,Eucgr.H02323,Eucgr.H02885,Eucgr.H02940,Eucgr.H04219,Eucgr.I00376,Eucgr.I01735,Eucgr.I02096,Eucgr.I02787,Eucgr.J00133,Eucgr.K00962,Eucgr.K01083,Eucgr.K01427,Eucgr.K01460,Eucgr.K02315,Eucgr.K02319,Eucgr.L02916","JA1072439978",NOW(),1);
*/

?>
<br>
<img id="tu" align="center" style="position: absolute;left:60%;display: none" src="images/tu.png"></img>
<h1 style="color: darkolivegreen"  align="center"><span>Your fingerprint is </span><span id="fingerprint"></span></h1>
<h3>API Help Documents</h3>
<ul>
<li><a href="https://documenter.getpostman.com/view/3025999/plantgenie/77k4gnU">PlantGenIE GeneList</a></li>
<li><a href="https://documenter.getpostman.com/view/3025999/RVncebdm">Gene Translation </a></li>
<li><a href="https://documenter.getpostman.com/view/3025999/collection/RWEfMKX2">Enrichment </a></li>
</ul>

<script src='js/fingerprint.js'></script>
<script type="application/javascript">
</script>

