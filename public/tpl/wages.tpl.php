<div class="p-3" id="wages">
    <h1>Paghe<h1>
    <ul style="font-size:12px;">Relazioni tabelle:
        <ol>-Header busta paga
            <li>Tabella enterprise (id_enterprise)</li>
            <li>Tabella contract (id_contract)</li>
            <li>Tabella contract_detail (id_contract_detail)</li>
            <li>Tabella worker (id_worker) collegato con id_enterprise, id_contract, id_contract_detail</li>
        </ol>
        <ol>-Calendario presenze
            <li>Tabella calendar (id_calendar) collegato con tabella worker (id_worker)</li>
        </ol>
        <ol>-Body busta paga
            <li>Tabella code (id_code)</li>
            <li>Tabella body (id_body) collegato con tabella calendar (id_calendar), tabella code (id_code)</li>
        </ol>
        <ol>-Footer (calcoli) busta paga
            <li>Tabella footer (id_footer) collegato con tabella body (id_body)</li>
        </ol>
    </ul>
    <ul style="font-size:12px;">
        <li>Cose da fare:</li>
        <li>Stabilire colonne per ogni tabella</li>
    </ul>


    <div id="header">
        <!-- zero row -->
        <div class="d-flex flex-nowrap">
        <div class="flex-grow-1 border">
            <div class="w-100">
                <div><label class="title title_bold">Mese retribuito</label></div>
                <div><label class="subtitle sub_1">Settembre 2019</label></div>     
            </div>
        </div>
            <div class="flex-grow-1 border">
                <div class="w-100">
                    <div><label class="title">Codice azienda</label></div>
                    <div><label class="subtitle sub_1">3007</label></div>
                </div>
            </div>
            <div class="flex-grow-1 border">
                <div class="w-100">
                    <div><label class="title">Codice filiale</label></div>
                    <div><label class="subtitle sub_2">1</label></div>
                </div>
            </div>
            <div class="flex-grow-1 border">
                <div class="w-100">
                    <div><label class="title">Ragione sociale</label></div>
                    <div><label class="subtitle sub_3">Prog</label></div>
                </div>
            </div>
            <div class="flex-grow-1 border">
                <div class="w-100">
                    <div><label class="title">Matr.inps.azienda</label></div>
                    <div><label class="subtitle sub_4">5528587697</label></div>
                </div>
            </div>
            <div class="flex-grow-1 border">
                <div class="w-100">
                    <div><label class="title">Posizione Inail</label></div>
                    <div><label class="subtitle sub_5">95357460 75</label></div>
                </div>
            </div>
            <div class="flex-grow-1 border">
                <div class="w-100">
                    <div><label class="title title_bold">Address</label></div>
                    <div><label class="subtitle sub_6">via la farina</label></div>
                </div>
            </div>
            <div class="flex-grow-1 border">
                <div class="w-100">
                    <div><label class="title title_bold">C.F.</label></div>
                    <div><label class="subtitle sub_7">06679720828</label></div>
                </div>
            </div>
        </div>
        <!-- first row -->
        <div class="d-flex flex-nowrap">
            <div class="flex-grow-1 border">
                <div class="w-100">
                    <div><label class="title title_bold">Codice lavoratore</label></div>
                    <div><label class="subtitle sub_6">6</label></div>
                </div>
            </div>
            <div class="flex-grow-1 border">
                <div class="w-100">
                    <div><label class="title title_bold">Cognome e nome</label></div>
                    <div><label class="subtitle sub_7">Rosciglione Dario</label></div>
                </div>
            </div>
            <div class="flex-grow-1 border">
                <div class="w-100">
                    <div><label class="title">Codice fiscale</label></div>
                    <div><label class="subtitle sub_1">RSCDRA87R04G273G</label></div>
                </div>
            </div>
            <div class="flex-grow-1 border">
                <div class="w-100">
                    <div><label class="title">Comune di residenza</label></div>
                    <div><label class="subtitle sub_2">Palermo</label></div>
                </div>
            </div>
            <div class="flex-grow-1 border">
                <div class="w-100">
                    <div><label class="title">Data di nascita</label></div>
                    <div><label class="subtitle sub_3">04/10/87</label></div>
                </div>
            </div>
        </div>
        <!-- second row -->
        <div class="d-flex flex-nowrap">
            <div class="flex-grow-1 border">
                <div class="w-100">
                    <div><label class="title">Data assunzione</label></div>
                    <div><label class="subtitle sub_8">02/04/19</label></div>
                </div>
            </div>
            <div class="flex-grow-1 border">
                <div class="w-100">
                    <div><label class="title">Data scadenza</label></div>
                    <div><label class="subtitle sub_9">03/04/19</label></div>
                </div>
            </div>
            <div class="flex-grow-1 border">
                <div class="w-100">
                    <div><label class="title">Scatti anzianità</label></div>
                    <div><label class="subtitle sub_10">05/22</label></div>
                </div>
            </div>
            <div class="flex-grow-1 border">
                <div class="w-100">
                    <div><label class="title">Data ass.conv</label></div>
                    <div><label class="subtitle sub_4"></label></div>
                </div>
            </div>
            <div class="flex-grow-1 border">
                <div class="w-100">
                    <div><label class="title">Situazione anf</label></div>
                    <div><label class="subtitle sub_5"></label></div>
                </div>
            </div>
            <div class="flex-grow-1 border">
                <div class="w-100">
                    <div><label class="title">Data cessazione</label></div>
                    <div><label class="subtitle sub_6"></label></div>
                </div>
            </div>
            <div class="flex-grow-1 border">
                <div class="w-100">
                    <div><label class="title">Gg. contributi</label></div>
                    <div><label class="subtitle sub_7">26</label></div>
                </div>
            </div>
            <div class="flex-grow-1 border">
                <div class="w-100">
                    <div><label class="title">Ore contributi</label></div>
                    <div><label class="subtitle sub_8">168</label></div>
                </div>
            </div>
        </div>
        <!-- third row -->
        <div class="d-flex flex-nowrap">
            <div class="flex-grow-1 border">
                <div class="w-100">
                    <div><label class="title">Qualifica n.</label></div>
                    <div><label class="subtitle sub_1">40</label></div>
                </div>
            </div>
            <div class="flex-grow-1 border">
                <div class="w-100">
                    <div><label class="title">Qualifica desc.</label></div>
                    <div><label class="subtitle sub_2">Sviluppatore software</label></div>
                </div>
            </div>
            <div class="flex-grow-1 border">
                <div class="w-100">
                    <div><label class="title">Centro di costo</label></div>
                    <div><label class="subtitle sub_3"></label></div>
                </div>
            </div>
            <div class="flex-grow-1 border">
                <div class="w-100">
                    <div><label class="title">Reparto</label></div>
                    <div><label class="subtitle sub_4"></label></div>
                </div>
            </div>
            <div class="flex-grow-1 border">
                <div class="w-100">
                    <div><label class="title">% Part time</label></div>
                    <div><label class="subtitle sub_5"></label></div>
                </div>
            </div>
            <div class="flex-grow-1 border">
                <div class="w-100">
                    <div><label class="title">Cartella</label></div>
                    <div><label class="subtitle sub_6"></label></div>
                </div>
            </div>
            <div class="flex-grow-1 border">
                <div class="w-100">
                    <div><label class="title">Livello</label></div>
                    <div><label class="subtitle sub_7">5^</label></div>
                </div>
            </div>
            <div class="flex-grow-1 border">
                <div class="w-100">
                    <div><label class="title">Cod. livello</label></div>
                    <div><label class="subtitle sub_8">5</label></div>
                </div>
            </div>
        </div>
        <!-- fourth row -->
        <div class="d-flex flex-nowrap">
            <div class="border">
                <div class="w-100">
                    <div><label class="title_bold" style="font-size: 10px;">Att. prec</label></div>
                </div>
            </div>
            <div class="flex-grow-1 border">
                <div class="w-100">
                    <div><label class="title">Paga base</label></div>
                    <div><label class="subtitle sub_1">987.00</label></div>
                </div>
            </div>
            <div class="flex-grow-1 border">
                <div class="w-100">
                    <div><label class="title">Contingenza</label></div>
                    <div><label class="subtitle sub_2">521.94</label></div>
                </div>
            </div>
            <div class="flex-grow-1 border">
                <div class="w-100">
                    <div><label class="title">III elemento</label></div>
                    <div><label class="subtitle sub_3">2.07</label></div>
                </div>
            </div>
            <div class="flex-grow-1 border_red">
                <div class="w-100">
                    <div><label class="title">Retr.oraria contr.(retribuzione di fatto / ore contributi)</label></div>
                    <div><label class="subtitle sub_4">9.02107</label></div>
                </div>
            </div>
            <div class="flex-grow-1 border_red">
                <div class="w-100">
                    <div><label class="title">Retr.giorn.contr.(retribuzione di fatto / giorni contributi)</label></div>
                    <div><label class="subtitle sub_5">58.29</label></div>
                </div>
            </div>
        </div>
        <!-- fifth row -->
        <div class="d-flex flex-nowrap">
            <div class="border">
                <div class="w-100">
                    <div><label class="title_bold" style="font-size: 10px;">Att. prec</label></div>
                </div>
            </div>
            <div class="flex-grow-1 border">
                <div class="w-100">
                    <div><label class="title">El.dis.san</label></div>
                    <div><label class="subtitle sub_1">16</label></div>
                </div>
            </div>
            <div class="flex-grow-1 border">
                <div class="w-100">
                    <div><label class="title">El.dis.bil</label></div>
                    <div><label class="subtitle sub_2">4.53</label></div>
                </div>
            </div>
            <div class="flex-grow-1 border_red">
                <div class="w-100">
                    <div><label class="title">Retrib.di fatto(paga base + contingenza + III elemento + el.dis.bil)</label></div>
                    <div><label class="subtitle sub_3">1515.54</label></div>
                </div>
            </div>
        </div>
    </div>

    <div id="body" class="d-flex flex-wrap mt-2">

        <div class="d-flex flex-nowrap col-md-12 p-0">
            <div class="d-flex flex-wrap col-md-9 p-0">
                <div class="d-flex flex-nowrap w-100">
                    <div class="flex-grow-1 border">
                        <div class="w-100">
                            <div><label class="title title_bold">Codice</label></div>
                            <div><label class="subtitle">8002</label></div>
                            <div><label class="subtitle">15</label></div>
                            <div><label class="subtitle"></label></div>
                            <div><label class="subtitle"></label></div>
                            <div><label class="subtitle"></label></div>
                            <div><label class="subtitle"></label></div>
                            <div><label class="subtitle"></label></div>
                            <div><label class="subtitle"></label></div>
                            <div><label class="subtitle"></label></div>
                            <div><label class="subtitle"></label></div>
                            <div><label class="subtitle"></label></div>
                            <div><label class="subtitle"></label></div>
                            <div><label class="subtitle"></label></div>
                            <div><label class="subtitle"></label></div>
                            <div><label class="subtitle"></label></div>
                            <div><label class="subtitle"></label></div>
                            <div><label class="subtitle"></label></div>
                            <div><label class="subtitle"></label></div>
                            <div><label class="subtitle"></label></div>
                            <div><label class="subtitle"></label></div>
                            <div><label class="subtitle"></label></div>
                        </div>
                    </div>
                    <div class="flex-grow-1 border">
                        <div class="w-100">
                            <div><label class="title title_bold">Descrizione</label></div>
                            <div><label class="subtitle">Lavoro ordinario (giorni)</label></div>
                            <div><label class="subtitle">Straordinario</label></div>
                            <div><label class="subtitle"></label></div>
                            <div><label class="subtitle"></label></div>
                            <div><label class="subtitle"></label></div>
                            <div><label class="subtitle"></label></div>
                            <div><label class="subtitle"></label></div>
                            <div><label class="subtitle"></label></div>
                            <div><label class="subtitle"></label></div>
                            <div><label class="subtitle"></label></div>
                            <div><label class="subtitle"></label></div>
                            <div><label class="subtitle"></label></div>
                            <div><label class="subtitle"></label></div>
                            <div><label class="subtitle"></label></div>
                            <div><label class="subtitle"></label></div>
                            <div><label class="subtitle"></label></div>
                            <div><label class="subtitle"></label></div>
                            <div><label class="subtitle"></label></div>
                            <div><label class="subtitle"></label></div>
                            <div><label class="subtitle"></label></div>
                            <div><label class="subtitle"></label></div>
                        </div>
                    </div>
                    <div class="flex-grow-1 border">
                        <div class="w-100">
                            <div><label class="title title_bold">Ore/Giorni</label></div>
                            <div><label class="subtitle">26.00</label></div>
                            <div><label class="subtitle">6.00</label></div>
                            <div><label class="subtitle"></label></div>
                            <div><label class="subtitle"></label></div>
                            <div><label class="subtitle"></label></div>
                            <div><label class="subtitle"></label></div>
                            <div><label class="subtitle"></label></div>
                            <div><label class="subtitle"></label></div>
                            <div><label class="subtitle"></label></div>
                            <div><label class="subtitle"></label></div>
                            <div><label class="subtitle"></label></div>
                            <div><label class="subtitle"></label></div>
                            <div><label class="subtitle"></label></div>
                            <div><label class="subtitle"></label></div>
                            <div><label class="subtitle"></label></div>
                            <div><label class="subtitle"></label></div>
                            <div><label class="subtitle"></label></div>
                            <div><label class="subtitle"></label></div>
                            <div><label class="subtitle"></label></div>
                            <div><label class="subtitle"></label></div>
                            <div><label class="subtitle"></label></div>
                        </div>
                    </div>
                    <div class="flex-grow-1 border">
                        <div class="w-100">
                            <div><label class="title title_bold">Base</label></div>
                            <div><label class="subtitle">58.29000</label></div>
                            <div><label class="subtitle">11.27634</label></div>
                            <div><label class="subtitle"></label></div>
                            <div><label class="subtitle"></label></div>
                            <div><label class="subtitle"></label></div>
                            <div><label class="subtitle"></label></div>
                            <div><label class="subtitle"></label></div>
                            <div><label class="subtitle"></label></div>
                            <div><label class="subtitle"></label></div>
                            <div><label class="subtitle"></label></div>
                            <div><label class="subtitle"></label></div>
                            <div><label class="subtitle"></label></div>
                            <div><label class="subtitle"></label></div>
                            <div><label class="subtitle"></label></div>
                            <div><label class="subtitle"></label></div>
                            <div><label class="subtitle"></label></div>
                            <div><label class="subtitle"></label></div>
                            <div><label class="subtitle"></label></div>
                            <div><label class="subtitle"></label></div>
                            <div><label class="subtitle"></label></div>
                            <div><label class="subtitle"></label></div>
                        </div>
                    </div>
                    <div class="flex-grow-1 border">
                        <div class="w-100">
                            <div><label class="title title_bold">Competenze</label></div>
                            <div><label class="subtitle">1515.54</label></div>
                            <div><label class="subtitle">67.66</label></div>
                            <div><label class="subtitle"></label></div>
                            <div><label class="subtitle"></label></div>
                            <div><label class="subtitle"></label></div>
                            <div><label class="subtitle"></label></div>
                            <div><label class="subtitle"></label></div>
                            <div><label class="subtitle"></label></div>
                            <div><label class="subtitle"></label></div>
                            <div><label class="subtitle"></label></div>
                            <div><label class="subtitle"></label></div>
                            <div><label class="subtitle"></label></div>
                            <div><label class="subtitle"></label></div>
                            <div><label class="subtitle"></label></div>
                            <div><label class="subtitle"></label></div>
                            <div><label class="subtitle"></label></div>
                            <div><label class="subtitle"></label></div>
                            <div><label class="subtitle"></label></div>
                            <div><label class="subtitle"></label></div>
                            <div><label class="subtitle"></label></div>
                            <div><label class="subtitle"></label></div>
                        </div>
                    </div>
                    <div class="flex-grow-1 border">
                        <div class="w-100">
                            <div><label class="title title_bold">Trattenute</label></div>
                            <div><label class="subtitle"></label></div>
                            <div><label class="subtitle"></label></div>
                            <div><label class="subtitle"></label></div>
                            <div><label class="subtitle"></label></div>
                            <div><label class="subtitle"></label></div>
                            <div><label class="subtitle"></label></div>
                            <div><label class="subtitle"></label></div>
                            <div><label class="subtitle"></label></div>
                            <div><label class="subtitle"></label></div>
                            <div><label class="subtitle"></label></div>
                            <div><label class="subtitle"></label></div>
                            <div><label class="subtitle"></label></div>
                            <div><label class="subtitle"></label></div>
                            <div><label class="subtitle"></label></div>
                            <div><label class="subtitle"></label></div>
                            <div><label class="subtitle"></label></div>
                            <div><label class="subtitle"></label></div>
                            <div><label class="subtitle"></label></div>
                            <div><label class="subtitle"></label></div>
                            <div><label class="subtitle"></label></div>
                            <div><label class="subtitle"></label></div>
                        </div>
                    </div>
                    <div class="flex-grow-1 border">
                        <div class="w-100">
                            <div><label class="title title_bold">Statistiche</label></div>
                            <div><label class="subtitle"></label></div>
                            <div><label class="subtitle"></label></div>
                            <div><label class="subtitle"></label></div>
                            <div><label class="subtitle"></label></div>
                            <div><label class="subtitle"></label></div>
                            <div><label class="subtitle"></label></div>
                            <div><label class="subtitle"></label></div>
                            <div><label class="subtitle"></label></div>
                            <div><label class="subtitle"></label></div>
                            <div><label class="subtitle"></label></div>
                            <div><label class="subtitle"></label></div>
                            <div><label class="subtitle"></label></div>
                            <div><label class="subtitle"></label></div>
                            <div><label class="subtitle"></label></div>
                            <div><label class="subtitle"></label></div>
                            <div><label class="subtitle"></label></div>
                            <div><label class="subtitle"></label></div>
                            <div><label class="subtitle"></label></div>
                            <div><label class="subtitle"></label></div>
                            <div><label class="subtitle"></label></div>
                            <div><label class="subtitle"></label></div>
                        </div>
                    </div>
                </div>
                <div class="d-flex flex-nowrap w-100 p-0 mt-2">
                    <div class="flex-grow-1 border">
                        <div class="w-100">
                            <div><label class="title title_bold">Totale lordo</label></div>
                            <div><label class="subtitle">1583.20</label></div>
                        </div>
                    </div>
                    <div class="flex-grow-1 border">
                        <div class="w-100">
                            <div><label class="title">Impon.contr.soc</label></div>
                            <div><label class="subtitle">1583.00</label></div>
                        </div>
                    </div>
                    <div class="flex-grow-1 border">
                        <div class="w-100">
                            <div><label class="title">Contributo 1</label></div>
                            <div><label class="subtitle">145.48</label></div>
                        </div>
                    </div>
                    <div class="flex-grow-1 border">
                        <div class="w-100">
                            <div><label class="title">Contributo 2</label></div>
                            <div><label class="subtitle"></label></div>
                        </div>
                    </div>
                    <div class="flex-grow-1 border">
                        <div class="w-100">
                            <div><label class="title">Contributo 3</label></div>
                            <div><label class="subtitle"></label></div>
                        </div>
                    </div>
                    <div class="flex-grow-1 border">
                        <div class="w-100">
                            <div><label class="title">Contributo 4</label></div>
                            <div><label class="subtitle"></label></div>
                        </div>
                    </div>
                    <div class="flex-grow-1 border">
                        <div class="w-100">
                            <div><label class="title">Contributo 5</label></div>
                            <div><label class="subtitle"></label></div>
                        </div>
                    </div>
                    <div class="flex-grow-1 border">
                        <div class="w-100">
                            <div><label class="title title_bold">Tot.Contr.soc</label></div>
                            <div><label class="subtitle">145.48</label></div>
                        </div>
                    </div>
                </div>
                <div class="d-flex flex-nowrap w-100">
                    <div class="flex-grow-1 border">
                        <div class="w-100">
                            <div><label class="title">Imp t.s. ante 2001</label></div>
                            <div><label class="subtitle"></label></div>
                        </div>
                    </div>
                    <div class="flex-grow-1 border">
                        <div class="w-100">
                            <div><label class="title">%</label></div>
                            <div><label class="subtitle"></label></div>
                        </div>
                    </div>
                    <div class="flex-grow-1 border">
                        <div class="w-100">
                            <div><label class="title">IRPEF</label></div>
                            <div><label class="subtitle"></label></div>
                        </div>
                    </div>
                    <div class="flex-grow-1 border">
                        <div class="w-100">
                            <div><label class="title">Imp t.s. TFR 2001</label></div>
                            <div><label class="subtitle"></label></div>
                        </div>
                    </div>
                    <div class="flex-grow-1 border">
                        <div class="w-100">
                            <div><label class="title">%</label></div>
                            <div><label class="subtitle"></label></div>
                        </div>
                    </div>
                    <div class="flex-grow-1 border">
                        <div class="w-100">
                            <div><label class="title">IRPEF netta</label></div>
                            <div><label class="subtitle"></label></div>
                        </div>
                    </div>
                    <div class="flex-grow-1 border">
                        <div class="w-100">
                            <div><label class="title">IRPEF su rival</label></div>
                            <div><label class="subtitle"></label></div>
                        </div>
                    </div>
                    <div class="flex-grow-1 border">
                        <div class="w-100">
                            <div><label class="title">IRPEF già pag.</label></div>
                            <div><label class="subtitle"></label></div>
                        </div>
                    </div>
                    <div class="flex-grow-1 border">
                        <div class="w-100">
                            <div><label class="title title_bold">Tot.contr.IRPEF.t.s</label></div>
                            <div><label class="subtitle"></label></div>
                        </div>
                    </div>
                </div>
                <div class="d-flex flex-nowrap w-100">
                    <div class="flex-grow-1 border">
                        <div class="w-100">
                            <div><label class="title">Imp t.s.s arr a.p</label></div>
                            <div><label class="subtitle"></label></div>
                        </div>
                    </div>
                    <div class="flex-grow-1 border">
                        <div class="w-100">
                            <div><label class="title">%</label></div>
                            <div><label class="subtitle"></label></div>
                        </div>
                    </div>
                    <div class="flex-grow-1 border">
                        <div class="w-100">
                            <div><label class="title">IRPEF a.p</label></div>
                            <div><label class="subtitle"></label></div>
                        </div>
                    </div>
                    <div class="flex-grow-1 border">
                        <div class="w-100">
                            <div><label class="title">Oneri deducibili</label></div>
                            <div><label class="subtitle"></label></div>
                        </div>
                    </div>
                    <div class="flex-grow-1 border">
                        <div class="w-100">
                            <div><label class="title">Imp. IRPEF</label></div>
                            <div><label class="subtitle"></label></div>
                        </div>
                    </div>
                    <div class="flex-grow-1 border">
                        <div class="w-100">
                            <div><label class="title">IRPEF lorda</label></div>
                            <div><label class="subtitle"></label></div>
                        </div>
                    </div>
                    <div class="flex-grow-1 border">
                        <div class="w-100">
                            <div><label class="title">Tot.detr</label></div>
                            <div><label class="subtitle"></label></div>
                        </div>
                    </div>
                    <div class="flex-grow-1 border">
                        <div class="w-100">
                            <div><label class="title title_bold">Tot.trat.IRPEF</label></div>
                            <div><label class="subtitle"></label></div>
                        </div>
                    </div>
                </div>
                <div class="d-flex flex-nowrap w-100">
                    <div class="flex-grow-1 border">
                        <div class="w-100">
                            <div><label class="title">Acconto</label></div>
                            <div><label class="subtitle"></label></div>
                        </div>
                    </div>
                    <div class="flex-grow-1 border">
                        <div class="w-100">
                            <div><label class="title">Rata prestito</label></div>
                            <div><label class="subtitle"></label></div>
                        </div>
                    </div>
                    <div class="flex-grow-1 border">
                        <div class="w-100">
                            <div><label class="title">Res.prestito</label></div>
                            <div><label class="subtitle"></label></div>
                        </div>
                    </div>
                    <div class="flex-grow-1 border">
                        <div class="w-100">
                            <div><label class="title">Tratt.sindac</label></div>
                            <div><label class="subtitle"></label></div>
                        </div>
                    </div>
                    <div class="flex-grow-1 border">
                        <div class="w-100">
                            <div><label class="title">Covelco</label></div>
                            <div><label class="subtitle"></label></div>
                        </div>
                    </div>
                    <div class="flex-grow-1 border">
                        <div class="w-100">
                            <div><label class="title">Arr.prec.</label></div>
                            <div><label class="subtitle"></label></div>
                        </div>
                    </div>
                    <div class="flex-grow-1 border">
                        <div class="w-100">
                            <div><label class="title">Tratt.corpo</label></div>
                            <div><label class="subtitle"></label></div>
                        </div>
                    </div>
                    <div class="flex-grow-1 border">
                        <div class="w-100">
                            <div><label class="title title_bold">Tot.trattenute</label></div>
                            <div><label class="subtitle"></label></div>
                        </div>
                    </div>
                </div>
                <div class="d-flex flex-nowrap w-100">
                    <div class="border">
                        <div class="w-100">
                            <div><label class="title_bold" style="font-size: 10px;">Conguaglio fine anno cess.rapp.</label></div>
                        </div>
                    </div>
                    <div class="flex-grow-1 border">
                        <div class="w-100">
                            <div><label class="title">Progr.on.ded</label></div>
                            <div><label class="subtitle"></label></div>
                        </div>
                    </div>
                    <div class="flex-grow-1 border">
                        <div class="w-100">
                            <div><label class="title">Progr.imp.IRPEF</label></div>
                            <div><label class="subtitle"></label></div>
                        </div>
                    </div>
                    <div class="flex-grow-1 border">
                        <div class="w-100">
                            <div><label class="title">Imp.IRPEF.annuo</label></div>
                            <div><label class="subtitle"></label></div>
                        </div>
                    </div>
                    <div class="flex-grow-1 border">
                        <div class="w-100">
                            <div><label class="title">Progr.detr.IRPEF</label></div>
                            <div><label class="subtitle"></label></div>
                        </div>
                    </div>
                    <div class="flex-grow-1 border">
                        <div class="w-100">
                            <div><label class="title">Progr.rit.IRPEF</label></div>
                            <div><label class="subtitle"></label></div>
                        </div>
                    </div>
                    <div class="flex-grow-1 border">
                        <div class="w-100">
                            <div><label class="title">Addizionale IRPEF</label></div>
                            <div><label class="subtitle"></label></div>
                        </div>
                    </div>
                    <div class="flex-grow-1 border">
                        <div class="w-100">
                            <div><label class="title">Conguaglio IRPEF +/-</label></div>
                            <div><label class="subtitle"></label></div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="d-flex flex-nowrap col-md-3 p-0">
                <div class="border">
                    <div class="w-100">
                        <div><label class="title">Giorno</label></div>
                        <div><label class="subtitle">1</label></div>
                        <div><label class="subtitle">2</label></div>
                        <div><label class="subtitle">3</label></div>
                        <div><label class="subtitle">4</label></div>
                        <div><label class="subtitle">5</label></div>
                        <div><label class="subtitle">6</label></div>
                        <div><label class="subtitle">7</label></div>
                        <div><label class="subtitle">8</label></div>
                        <div><label class="subtitle">9</label></div>
                        <div><label class="subtitle">10</label></div>
                        <div><label class="subtitle">11</label></div>
                        <div><label class="subtitle">12</label></div>
                        <div><label class="subtitle">13</label></div>
                        <div><label class="subtitle">14</label></div>
                        <div><label class="subtitle">15</label></div>
                        <div><label class="subtitle">16</label></div>
                        <div><label class="subtitle">17</label></div>
                        <div><label class="subtitle">18</label></div>
                        <div><label class="subtitle">19</label></div>
                        <div><label class="subtitle">20</label></div>
                        <div><label class="subtitle">21</label></div>
                        <div><label class="subtitle">22</label></div>
                        <div><label class="subtitle">23</label></div>
                        <div><label class="subtitle">24</label></div>
                        <div><label class="subtitle">25</label></div>
                        <div><label class="subtitle">26</label></div>
                        <div><label class="subtitle">27</label></div>
                        <div><label class="subtitle">28</label></div>
                        <div><label class="subtitle">29</label></div>
                        <div><label class="subtitle">30</label></div>
                        <div><label class="subtitle">31</label></div>
                    </div>
                </div>
                <div class="flex-grow-1 border">
                    <div class="w-100">
                        <div><label class="title">Ore lavorate</label></div>
                        <div><label class="subtitle"></label></div>
                        <div><label class="subtitle"></label></div>
                        <div><label class="subtitle"></label></div>
                        <div><label class="subtitle"></label></div>
                        <div><label class="subtitle"></label></div>
                        <div><label class="subtitle"></label></div>
                        <div><label class="subtitle"></label></div>
                        <div><label class="subtitle"></label></div>
                        <div><label class="subtitle"></label></div>
                        <div><label class="subtitle"></label></div>
                        <div><label class="subtitle"></label></div>
                        <div><label class="subtitle"></label></div>
                        <div><label class="subtitle"></label></div>
                        <div><label class="subtitle"></label></div>
                        <div><label class="subtitle"></label></div>
                        <div><label class="subtitle"></label></div>
                        <div><label class="subtitle"></label></div>
                        <div><label class="subtitle"></label></div>
                        <div><label class="subtitle"></label></div>
                        <div><label class="subtitle"></label></div>
                        <div><label class="subtitle"></label></div>
                        <div><label class="subtitle"></label></div>
                        <div><label class="subtitle"></label></div>
                        <div><label class="subtitle"></label></div>
                        <div><label class="subtitle"></label></div>
                        <div><label class="subtitle"></label></div>
                        <div><label class="subtitle"></label></div>
                        <div><label class="subtitle"></label></div>
                        <div><label class="subtitle"></label></div>
                        <div><label class="subtitle"></label></div>
                        <div><label class="subtitle"></label></div>
                    </div>
                </div>
                <div class="border">
                    <div class="w-100">
                        <div><label class="title">Sigla</label></div>
                        <div><label class="subtitle"></label></div>
                        <div><label class="subtitle"></label></div>
                        <div><label class="subtitle"></label></div>
                        <div><label class="subtitle"></label></div>
                        <div><label class="subtitle"></label></div>
                        <div><label class="subtitle"></label></div>
                        <div><label class="subtitle"></label></div>
                        <div><label class="subtitle"></label></div>
                        <div><label class="subtitle"></label></div>
                        <div><label class="subtitle"></label></div>
                        <div><label class="subtitle"></label></div>
                        <div><label class="subtitle"></label></div>
                        <div><label class="subtitle"></label></div>
                        <div><label class="subtitle"></label></div>
                        <div><label class="subtitle"></label></div>
                        <div><label class="subtitle"></label></div>
                        <div><label class="subtitle"></label></div>
                        <div><label class="subtitle"></label></div>
                        <div><label class="subtitle"></label></div>
                        <div><label class="subtitle"></label></div>
                        <div><label class="subtitle"></label></div>
                        <div><label class="subtitle"></label></div>
                        <div><label class="subtitle"></label></div>
                        <div><label class="subtitle"></label></div>
                        <div><label class="subtitle"></label></div>
                        <div><label class="subtitle"></label></div>
                        <div><label class="subtitle"></label></div>
                        <div><label class="subtitle"></label></div>
                        <div><label class="subtitle"></label></div>
                        <div><label class="subtitle"></label></div>
                        <div><label class="subtitle"></label></div>
                    </div>
                </div>
                <div class="flex-grow-1 border">
                    <div class="w-100">
                        <div><label class="title">Quantità</label></div>
                        <div><label class="subtitle"></label></div>
                        <div><label class="subtitle"></label></div>
                        <div><label class="subtitle"></label></div>
                        <div><label class="subtitle"></label></div>
                        <div><label class="subtitle"></label></div>
                        <div><label class="subtitle"></label></div>
                        <div><label class="subtitle"></label></div>
                        <div><label class="subtitle"></label></div>
                        <div><label class="subtitle"></label></div>
                        <div><label class="subtitle"></label></div>
                        <div><label class="subtitle"></label></div>
                        <div><label class="subtitle"></label></div>
                        <div><label class="subtitle"></label></div>
                        <div><label class="subtitle"></label></div>
                        <div><label class="subtitle"></label></div>
                        <div><label class="subtitle"></label></div>
                        <div><label class="subtitle"></label></div>
                        <div><label class="subtitle"></label></div>
                        <div><label class="subtitle"></label></div>
                        <div><label class="subtitle"></label></div>
                        <div><label class="subtitle"></label></div>
                        <div><label class="subtitle"></label></div>
                        <div><label class="subtitle"></label></div>
                        <div><label class="subtitle"></label></div>
                        <div><label class="subtitle"></label></div>
                        <div><label class="subtitle"></label></div>
                        <div><label class="subtitle"></label></div>
                        <div><label class="subtitle"></label></div>
                        <div><label class="subtitle"></label></div>
                        <div><label class="subtitle"></label></div>
                        <div><label class="subtitle"></label></div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div id="footer">
        
        <div class="d-flex flex-nowrap col-md-12 p-0">
            <div class="d-flex flex-wrap col-md-9 p-0">
                <div class="d-flex flex-nowrap w-100">
                    <div class="flex-grow-1 border">
                        <div class="w-100">
                            <div><label class="title">IRPEF erario</label></div>
                            <div><label class="subtitle"></label></div>
                        </div>
                    </div>
                    <div class="flex-grow-1 border">
                        <div class="w-100">
                            <div><label class="title">Add.regionale</label></div>
                            <div><label class="subtitle"></label></div>
                        </div>
                    </div>
                    <div class="flex-grow-1 border">
                        <div class="w-100">
                            <div><label class="title">Add.comunale</label></div>
                            <div><label class="subtitle"></label></div>
                        </div>
                    </div>
                    <div class="flex-grow-1 border">
                        <div class="w-100">
                            <div><label class="title">Arr.attuale</label></div>
                            <div><label class="subtitle">0.77</label></div>
                        </div>
                    </div>
                    <div class="flex-grow-1 border">
                        <div class="w-100">
                            <div><label class="title">Netto busta</label></div>
                            <div><label class="subtitle">1250.00</label></div>
                        </div>
                    </div>
                </div>
                <div class="d-flex flex-nowrap w-100">
                    <div class="flex-grow-1 border">
                        <div class="w-100">
                            <div><label class="title">Ferie a.p.</label></div>
                            <div><label class="subtitle"></label></div>
                        </div>
                    </div>
                    <div class="flex-grow-1 border">
                        <div class="w-100">
                            <div><label class="title">Ferie mat.</label></div>
                            <div><label class="subtitle">35.00</label></div>
                        </div>
                    </div>
                    <div class="flex-grow-1 border">
                        <div class="w-100">
                            <div><label class="title">Ferie god.</label></div>
                            <div><label class="subtitle"></label></div>
                        </div>
                    </div>
                    <div class="flex-grow-1 border">
                        <div class="w-100">
                            <div><label class="title">Fer.res.</label></div>
                            <div><label class="subtitle">35.00</label></div>
                        </div>
                    </div>
                    <div class="flex-grow-1 border">
                        <div class="w-100">
                            <div><label class="title">Perm.mat.</label></div>
                            <div><label class="subtitle"></label></div>
                        </div>
                    </div>
                    <div class="flex-grow-1 border">
                        <div class="w-100">
                            <div><label class="title">Perm.god.</label></div>
                            <div><label class="subtitle"></label></div>
                        </div>
                    </div>
                    <div class="flex-grow-1 border">
                        <div class="w-100">
                            <div><label class="title">Perm.res.</label></div>
                            <div><label class="subtitle"></label></div>
                        </div>
                    </div>
                    <div class="flex-grow-1 border">
                        <div class="w-100">
                            <div><label class="title">ROL a.p.</label></div>
                            <div><label class="subtitle"></label></div>
                        </div>
                    </div>
                    <div class="flex-grow-1 border">
                        <div class="w-100">
                            <div><label class="title">ROL mat.</label></div>
                            <div><label class="subtitle"></label></div>
                        </div>
                    </div>
                    <div class="flex-grow-1 border">
                        <div class="w-100">
                            <div><label class="title">Perm.god.</label></div>
                            <div><label class="subtitle"></label></div>
                        </div>
                    </div>
                    <div class="flex-grow-1 border">
                        <div class="w-100">
                            <div><label class="title">Perm.res.</label></div>
                            <div><label class="subtitle"></label></div>
                        </div>
                    </div>
                </div>
                <div class="d-flex flex-nowrap w-100">
                    <div class="flex-grow-1 border">
                        <div class="w-100">
                            <div><label class="title">Fest. a.p.</label></div>
                            <div><label class="subtitle"></label></div>
                        </div>
                    </div>
                    <div class="flex-grow-1 border">
                        <div class="w-100">
                            <div><label class="title">Fest. mat.</label></div>
                            <div><label class="subtitle">6.67</label></div>
                        </div>
                    </div>
                    <div class="flex-grow-1 border">
                        <div class="w-100">
                            <div><label class="title">Fest. god.</label></div>
                            <div><label class="subtitle"></label></div>
                        </div>
                    </div>
                    <div class="flex-grow-1 border">
                        <div class="w-100">
                            <div><label class="title">Fest.res.</label></div>
                            <div><label class="subtitle">6.67</label></div>
                        </div>
                    </div>
                    <div class="flex-grow-1 border">
                        <div class="w-100">
                            <div><label class="title">Fless.a.p.</label></div>
                            <div><label class="subtitle"></label></div>
                        </div>
                    </div>
                    <div class="flex-grow-1 border">
                        <div class="w-100">
                            <div><label class="title">Fless.mat.</label></div>
                            <div><label class="subtitle"></label></div>
                        </div>
                    </div>
                    <div class="flex-grow-1 border">
                        <div class="w-100">
                            <div><label class="title">Fless.god.</label></div>
                            <div><label class="subtitle"></label></div>
                        </div>
                    </div>
                    <div class="flex-grow-1 border">
                        <div class="w-100">
                            <div><label class="title">Fless.res.</label></div>
                            <div><label class="subtitle"></label></div>
                        </div>
                    </div>
                    <div class="flex-grow-1 border">
                        <div class="w-100">
                            <div><label class="title">B.ore a.p.</label></div>
                            <div><label class="subtitle"></label></div>
                        </div>
                    </div>
                    <div class="flex-grow-1 border">
                        <div class="w-100">
                            <div><label class="title">B.ore mat.</label></div>
                            <div><label class="subtitle"></label></div>
                        </div>
                    </div>
                    <div class="flex-grow-1 border">
                        <div class="w-100">
                            <div><label class="title">B.ore god.</label></div>
                            <div><label class="subtitle"></label></div>
                        </div>
                    </div>
                    <div class="flex-grow-1 border">
                        <div class="w-100">
                            <div><label class="title">B.ore res.</label></div>
                            <div><label class="subtitle"></label></div>
                        </div>
                    </div>
                </div>
                <div class="d-flex flex-nowrap w-100">
                    <div class="border">
                        <div class="w-100">
                            <div><label class="title_bold" style="font-size: 10px;">Dati statistici</label></div>
                        </div>
                    </div>
                    <div class="flex-grow-1 border">
                        <div class="w-100">
                            <div><label class="title">Q/INPS</label></div>
                            <div><label class="subtitle">2</label></div>
                        </div>
                    </div>
                    <div class="flex-grow-1 border">
                        <div class="w-100">
                            <div><label class="title">POS</label></div>
                            <div><label class="subtitle"></label></div>
                        </div>
                    </div>
                    <div class="flex-grow-1 border">
                        <div class="w-100">
                            <div><label class="title">Sett</label></div>
                            <div><label class="subtitle"></label></div>
                        </div>
                    </div>
                    <div class="flex-grow-1 border">
                        <div class="w-100">
                            <div><label class="title">Ore INPS</label></div>
                            <div><label class="subtitle">130</label></div>
                        </div>
                    </div>
                    <div class="flex-grow-1 border">
                        <div class="w-100">
                            <div><label class="title">Gg INPS</label></div>
                            <div><label class="subtitle">26</label></div>
                        </div>
                    </div>
                    <div class="flex-grow-1 border">
                        <div class="w-100">
                            <div><label class="title">Gg minim.</label></div>
                            <div><label class="subtitle">30</label></div>
                        </div>
                    </div>
                    <div class="flex-grow-1 border">
                        <div class="w-100">
                            <div><label class="title">Ore INAIL</label></div>
                            <div><label class="subtitle">130</label></div>
                        </div>
                    </div>
                    <div class="flex-grow-1 border">
                        <div class="w-100">
                            <div><label class="title">Gg INAIL</label></div>
                            <div><label class="subtitle">21</label></div>
                        </div>
                    </div>
                    <div class="flex-grow-1 border">
                        <div class="w-100">
                            <div><label class="title">Imponibile INAIL</label></div>
                            <div><label class="subtitle">1583.00</label></div>
                        </div>
                    </div>
                    <div class="flex-grow-1 border">
                        <div class="w-100">
                            <div><label class="title">Imponibile Silicosi</label></div>
                            <div><label class="subtitle"></label></div>
                        </div>
                    </div>
                    <div class="flex-grow-1 border">
                        <div class="w-100">
                            <div><label class="title">TFR mese</label></div>
                            <div><label class="subtitle">117.27</label></div>
                        </div>
                    </div>
                </div>
                <div class="d-flex flex-nowrap w-100">
                    <div class="border">
                        <div class="w-100">
                            <div><label class="title_bold" style="font-size: 10px;">Detrazioni spettanti</label></div>
                        </div>
                    </div>
                    <div class="flex-grow-1 border">
                        <div class="w-100">
                            <div><label class="title">Lavoro dip.</label></div>
                            <div><label class="subtitle">154.52</label></div>
                        </div>
                    </div>
                    <div class="flex-grow-1 border">
                        <div class="w-100">
                            <div><label class="title">Coniuge</label></div>
                            <div><label class="subtitle"></label></div>
                        </div>
                    </div>
                    <div class="flex-grow-1 border">
                        <div class="w-100">
                            <div><label class="title">Figli</label></div>
                            <div><label class="subtitle"></label></div>
                        </div>
                    </div>
                    <div class="flex-grow-1 border">
                        <div class="w-100">
                            <div><label class="title">Altri carichi</label></div>
                            <div><label class="subtitle"></label></div>
                        </div>
                    </div>
                    <div class="flex-grow-1 border">
                        <div class="w-100">
                            <div><label class="title">Oneri</label></div>
                            <div><label class="subtitle"></label></div>
                        </div>
                    </div>
                    <div class="flex-grow-1 border">
                        <div class="w-100">
                            <div><label class="title">Ulteriore detraz.</label></div>
                            <div><label class="subtitle"></label></div>
                        </div>
                    </div>
                    <div class="flex-grow-1 border">
                        <div class="w-100">
                            <div><label class="title">Diff. minori</label></div>
                            <div><label class="subtitle"></label></div>
                        </div>
                    </div>
                    <div class="flex-grow-1 border">
                        <div class="w-100">
                            <div><label class="title">diff. apprendisti</label></div>
                            <div><label class="subtitle"></label></div>
                        </div>
                    </div>
                </div>
                <div class="d-flex flex-nowrap w-100">
                    <div class="border">
                        <div class="w-100">
                            <div><label class="title_bold" style="font-size: 10px;">Progres.annui</label></div>
                        </div>
                    </div>
                    <div class="flex-grow-1 border">
                        <div class="w-100">
                            <div><label class="title">Imponibile INAIL</label></div>
                            <div><label class="subtitle">4089.00</label></div>
                        </div>
                    </div>
                    <div class="flex-grow-1 border">
                        <div class="w-100">
                            <div><label class="title">Imp.contrib.soc</label></div>
                            <div><label class="subtitle">4089.00</label></div>
                        </div>
                    </div>
                    <div class="flex-grow-1 border">
                        <div class="w-100">
                            <div><label class="title">Contrib.soc</label></div>
                            <div><label class="subtitle">375.78</label></div>
                        </div>
                    </div>
                    <div class="flex-grow-1 border">
                        <div class="w-100">
                            <div><label class="title">Oneri deducibili</label></div>
                            <div><label class="subtitle"></label></div>
                        </div>
                    </div>
                    <div class="flex-grow-1 border">
                        <div class="w-100">
                            <div><label class="title">Imponibile IRPEF</label></div>
                            <div><label class="subtitle">3713.90</label></div>
                        </div>
                    </div>
                    <div class="flex-grow-1 border">
                        <div class="w-100">
                            <div><label class="title">IRPEF lorda</label></div>
                            <div><label class="subtitle">865.55</label></div>
                        </div>
                    </div>
                    <div class="flex-grow-1 border">
                        <div class="w-100">
                            <div><label class="title">Tot detr</label></div>
                            <div><label class="subtitle">777.75</label></div>
                        </div>
                    </div>
                    <div class="flex-grow-1 border">
                        <div class="w-100">
                            <div><label class="title">IRPEF pagata</label></div>
                            <div><label class="subtitle">190.67</label></div>
                        </div>
                    </div>
                </div>
                <div class="d-flex flex-nowrap w-100">
                    <div class="flex-grow-1 border">
                        <div class="w-100">
                            <div><label class="title">C/C</label></div>
                            <div><label class="subtitle">IT12312312312312311231</label></div>
                        </div>
                    </div>
                    <div class="flex-grow-1 border">
                        <div class="w-100">
                            <div><label class="title">Banca accredito</label></div>
                            <div><label class="subtitle">Unicredit</label></div>
                        </div>
                    </div>
                    <div class="flex-grow-1 border">
                        <div class="w-100">
                            <div><label class="title">Firma</label></div>
                            <div><label class="subtitle"></label></div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="d-flex flex-wrap col-md-3 p-0">
                <div class="d-flex flex-nowrap w-100">
                    <div class="border">
                        <div class="w-100">
                            <div><label class="title">Sigla</label></div>
                            <div><label class="subtitle">S</label></div>
                        </div>
                    </div>
                    <div class="flex-grow-1 border">
                        <div class="w-100">
                            <div><label class="title">Descrizione</label></div>
                            <div><label class="subtitle">Straordinario diurno in turno</label></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>

<div>