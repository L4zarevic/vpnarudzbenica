
<?php

$str='<html><head><meta charset="utf-8"></head><body><h2>Narudžbenica - Poloptic</h2><br/>Narudžba od: Ilija Toholj<br/>Datum narudžbe: 24.05.2021 u 14:01<br/><br/><table rules="all" style="border-color:#000;" cellpadding="2"><thead><tr><th>R.br.</th><th>Lag-Spec</th><th>Od/Os/Ou</th><th>Vrsta soč.</th><th>Dizajn</th><th>PRL/OCHT</th><th>Segm.</th><th>Baza</th><th>Index</th><th>Vrsta materijala</th><th>Prečn.</th><th>SPH</th><th>CYL</th><th>Ugao</th><th>Add</th><th>JM</th><th>Kol.</th><th>Tr.1</th><th>Tr.2</th><th>PD</th><th>Mjesto ispor.</th><th>Napomena</th><th></th></tr></thead><tbody><tr><td>1</td><td>Lager</td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td>1.50 Solea HC 1.00/+1.25 65mm</td><td></td><td></td><td></td><td></td><td></td><td>kom</td><td>4</td><td></td><td></td><td></td><td>Delta - Banja Luka</td><td></td></tr></tbody></body></html><td>2</td><td>Lager</td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td>1.50 Solea Ultra BackSide -2.5/+1.25 70mm</td><td></td><td></td><td></td><td></td><td></td><td>kom</td><td>3</td><td></td><td></td><td></td><td>Delta - Banja Luka</td><td></td></tr></tbody></body></html><td>3</td><td>Lager</td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td>1.50 Solea Ultra BackSide -4.0/+2.00 70mm</td><td></td><td></td><td></td><td></td><td></td><td>kom</td><td>4</td><td></td><td></td><td></td><td>Delta - Banja Luka</td><td></td></tr></tbody></body></html>';
echo htmlspecialchars_decode($str);

// note that here the quotes aren't converted
echo htmlspecialchars_decode($str, ENT_NOQUOTES);
?>
