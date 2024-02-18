@extends('admin.layout.app')

@push('styles')
    <style>
        .dataTables_filter {
            float:right;
        }
        #example2_paginate {
            float: right;
        }
        #example3_paginate {
            float: right;
        }
        #example4_paginate {
            float: right;
        }
    </style>
@endpush

@section('content')
    <div class="main-content">
        <h2 class="mb-5 pb-3" style="font-weight:bold;border-bottom:1px solid #efefef;">MACHINERY LIST </h2>

        <div class="d-flex flex-row float-right" >
            <div class="row justify-content-center">
                <div class="col-md-12" >
                    <div style="width:200px; margin-top:1px; z-index:9999;">
                        <label style="margin-bottom:0px;">Machine</label>
                        <select class="form-control" style="height:27px;padding:4px 14px;">
                            <option selected disabled>Select Machine</option>
                            <option>Machine 1</option>
                            <option>Machine 2</option>
                            <option>Machine 3</option>
                            <option>Machine 4</option>
                            <option>Machine 5</option>
                        </select>
                    </div>
                </div>
            </div>
            <div class="row justify-content-center" style="margin-left: 0px;">
                <div class="col-md-12">
                    <div style="width:200px; margin-top:1px; z-index:9999;">
                        <label style="margin-bottom:0px;">Model</label>
                        <select class="form-control" style="height:27px;padding:4px 14px;">
                            <option selected disabled>Select Model</option>
                            <option>2020</option>
                            <option>2021</option>
                        </select>
                    </div>
                </div>
            </div>
            <div class="row justify-content-center" style="margin-left: 0px;">
                <div class="col-md-12" style="position:relative; ">
                    <div style="width:200px; margin-top:1px; z-index:9999;">
                        <label style="margin-bottom:0px;">Driver</label>
                        <select class="form-control" style="height:27px;padding:4px 14px;">
                            <option selected disabled>Select Driver</option>
                            <option>Wali</option>
                            <option>John</option>
                            <option>Hassan</option>
                            <option>Tony</option>
                        </select>
                    </div>
                </div>
            </div>
            <div class="row justify-content-center" style="margin-left: 0px;">
                <div class="col-md-12" style="position:relative;">
                    <div style="width:200px; margin-top:1px; z-index:9999;">
                        <label style="margin-bottom:0px;">Site</label>
                        <select class="form-control" style="height:27px;padding:4px 14px;">
                            <option selected disabled>Select Site</option>
                            <option>Site 1</option>
                            <option>Site 2</option>
                            <option>Site 3</option>
                            <option>Site 4</option>
                        </select>
                    </div>
                </div>
            </div>
            <div class="row justify-content-center" style="margin-left: 0px;">
                <div class="col-md-12" style="position:relative; ">
                    <div style="width:200px; margin-top:1px; z-index:9999;">
                        <label style="margin-bottom:0px;">Month</label>
                        <select class="form-control" style="height:27px;padding:4px 14px;">
                            <option selected disabled>Select Month</option>
                            <option>Jan</option>
                            <option>Feb</option>
                            <option>Mar</option>
                            <option>Apr</option>
                            <option>May</option>
                            <option>Jun</option>
                            <option>Jul</option>
                            <option>Aug</option>
                            <option>Sept</option>
                            <option>Oct</option>
                            <option>Noc</option>
                            <option>Dec</option>
                        </select>
                    </div>
                </div>
            </div>
        </div>

        <table id="example2" class="table table-striped" style="width:100%">
                <thead>
                <tr>
                    <th>No</th>
                    <th>MACHINE ID</th>
                    <th>MODEL</th>
                    <th>Driver</th>
                    <th>Site</th>
                    <th>Report</th>
                    <th>REMARK</th>
                </tr>
                </thead>
                <tbody>
                <tr>
                    <td>1</td>
                    <td>LYK221</td>
                    <td>PC - 28</td>
                    <td>JAWI</td>
                    <td>BAYU</td>
                    <td></td>
                    <td></td>
                </tr>
                <tr>
                    <td>2</td>
                    <td>LYK223</td>
                    <td>EX200 - 5</td>
                    <td>NO DRIVER</td>
                    <td>IMPIANA BATA</td>
                    <td></td>
                    <td></td>
                </tr>
                <tr>
                    <td>3</td>
                    <td>LYK116</td>
                    <td>D6D LS</td>
                    <td>NO DRIVER</td>
                    <td>IMPIANA CULVERT</td>
                    <td></td>
                    <td></td>
                </tr>
                <tr>
                    <td>4</td>
                    <td>LYK117</td>
                    <td>D6D</td>
                    <td>NO DRIVER</td>
                    <td></td>
                    <td></td>
                    <td></td>
                </tr>
                <tr>
                    <td>5</td>
                    <td>LYK209</td>
                    <td>ZX200</td>
                    <td>NO DRIVER</td>
                    <td>JELAI</td>
                    <td></td>
                    <td>ESTATE PINJAM</td>
                </tr>
                <tr>
                    <td>6</td>
                    <td>LYK240</td>
                    <td>PC200 - 10M0</td>
                    <td>SUARDI</td>
                    <td>KAMINSKY</td>
                    <td></td>
                    <td></td>
                </tr>
                <tr>
                    <td>7</td>
                    <td>LYK241</td>
                    <td>320 GX</td>
                    <td>SAING</td>
                    <td>KAMINSKY</td>
                    <td></td>
                    <td></td>
                </tr>
                <tr>
                    <td>8</td>
                    <td>LYK119</td>
                    <td>D6BESS - 12E0</td>
                    <td>MADONG</td>
                    <td>LAMBIR</td>
                    <td></td>
                    <td></td>
                </tr>
                <tr>
                    <td>9</td>
                    <td>LYK202</td>
                    <td>320GC</td>
                    <td>ASRUL</td>
                    <td>LAMBIR</td>
                    <td></td>
                    <td></td>
                </tr>
                <tr>
                    <td>10</td>
                    <td>LYK213</td>
                    <td>EX120 - 1</td>
                    <td>NO DRIVER</td>
                    <td>LAMBIR</td>
                    <td></td>
                    <td></td>
                </tr>
                <tr>
                    <td>11</td>
                    <td>LYK229</td>
                    <td>320GC</td>
                    <td>BAHAR</td>
                    <td>LAMBIR</td>
                    <td></td>
                    <td></td>
                </tr>
                <tr>
                    <td>12</td>
                    <td>LYK237</td>
                    <td>PC200 - 10M0</td>
                    <td>AMIR</td>
                    <td>LAMBIR</td>
                    <td></td>
                    <td>PINDAH DARI TELABIT PERGI LAMBIR</td>
                </tr>
                <tr>
                    <td>13</td>
                    <td>BH201</td>
                    <td>ZX200 - SG</td>
                    <td>SUPRIADI</td>
                    <td>MAJRANY</td>
                    <td></td>
                    <td></td>
                </tr>
                <tr>
                    <td>14</td>
                    <td>BH202</td>
                    <td>ZX200 - SG</td>
                    <td>DURAHMAN</td>
                    <td>MAJRANY</td>
                    <td></td>
                    <td></td>
                </tr>
                <tr>
                    <td>15</td>
                    <td>LYK111</td>
                    <td>D5R2 XL</td>
                    <td>YUSUP</td>
                    <td>MAJRANY</td>
                    <td></td>
                    <td></td>
                </tr>
                <tr>
                    <td>16</td>
                    <td>LYK120</td>
                    <td>D68ESS-12E0</td>
                    <td>BABA</td>
                    <td>MAJRANY</td>
                    <td></td>
                    <td>PINDAH DARI TELABIT PERGI MAJRANY </td>
                </tr>
                <tr>
                    <td>17</td>
                    <td>LYK210</td>
                    <td>EX200 - 5</td>
                    <td>GEMA</td>
                    <td>RAJAWALI</td>
                    <td></td>
                    <td>HOURLY</td>
                </tr>
                <tr>
                    <td>18</td>
                    <td>LYK112</td>
                    <td>D5R2 XL</td>
                    <td>GALAU</td>
                    <td>RASAN</td>
                    <td></td>
                    <td></td>
                </tr>
                <tr>
                    <td>19</td>
                    <td>LYK206</td>
                    <td>313D2 LGP</td>
                    <td>NASUTION</td>
                    <td>RASAN</td>
                    <td></td>
                    <td></td>
                </tr>
                <tr>
                    <td>20</td>
                    <td>LYK207</td>
                    <td>ZX200-5G</td>
                    <td>KAKA</td>
                    <td>RASAN</td>
                    <td></td>
                    <td></td>
                </tr>
                <tr>
                    <td>21</td>
                    <td>LYK227</td>
                    <td>320GC</td>
                    <td>SANI</td>
                    <td>RASAN</td>
                    <td></td>
                    <td></td>
                </tr>
                <tr>
                    <td>22</td>
                    <td>LYK233</td>
                    <td>320GC</td>
                    <td>DARHADI</td>
                    <td>SEMARAK</td>
                    <td></td>
                    <td>PINDAH DARI RASAN PERGI TAKAU</td>
                </tr>
                <tr>
                    <td>23</td>
                    <td>LYK239</td>
                    <td>PC200 - 10M0</td>
                    <td>IWAN</td>
                    <td>SEMARAK</td>
                    <td></td>
                    <td></td>
                </tr>
                <tr>
                    <td>24</td>
                    <td>LYK121</td>
                    <td>D5R2 XL</td>
                    <td>FRANCIS</td>
                    <td>SEMARAK</td>
                    <td></td>
                    <td></td>
                </tr>
                <tr>
                    <td>25</td>
                    <td>LYK238</td>
                    <td>PC200 - 10M0</td>
                    <td>MALINDO</td>
                    <td>SG BALIM</td>
                    <td></td>
                    <td></td>
                </tr>
                <tr>
                    <td>26</td>
                    <td>LYK242</td>
                    <td>320 GX</td>
                    <td>ARSYAD</td>
                    <td>SG BALIM</td>
                    <td></td>
                    <td>ARDE SUDAH BERHENTI</td>
                </tr>
                <tr>
                    <td>27</td>
                    <td>LYK203</td>
                    <td>320 GC</td>
                    <td>ABDULLAH SAARIN</td>
                    <td>SG BALIM</td>
                    <td></td>
                    <td>ABDULLAH SAARIN CUTI</td>
                </tr>
                <tr>
                    <td>28</td>
                    <td>LYK204</td>
                    <td>320 GC</td>
                    <td>AMRANG</td>
                    <td>SG BALIM</td>
                    <td></td>
                    <td></td>
                </tr>
                <tr>
                    <td>29</td>
                    <td>LYK224</td>
                    <td>313D2 LGP</td>
                    <td>ISMAIL</td>
                    <td>SG BALIM</td>
                    <td></td>
                    <td></td>
                </tr>
                <tr>
                    <td>30</td>
                    <td>LYK225</td>
                    <td>320 GC</td>
                    <td>ILHAM</td>
                    <td>SG BALIM</td>
                    <td></td>
                    <td></td>
                </tr>
                <tr>
                    <td>31</td>
                    <td>LYK231</td>
                    <td>PC210 - 10M0</td>
                    <td>ALWADI</td>
                    <td>SG BALIM</td>
                    <td></td>
                    <td></td>
                </tr>
                <tr>
                    <td>32</td>
                    <td>LYK235</td>
                    <td>320 GC</td>
                    <td>MURSALIM</td>
                    <td>SG BALIM</td>
                    <td></td>
                    <td></td>
                </tr>
                <tr>
                    <td>33</td>
                    <td>LYK236</td>
                    <td>PC130F-7</td>
                    <td>HENDRIK</td>
                    <td>SG BALIM</td>
                    <td></td>
                    <td></td>
                </tr>
                <tr>
                    <td>34</td>
                    <td>LYK205</td>
                    <td>313D2 LGP</td>
                    <td>BOY</td>
                    <td>SG TRUS</td>
                    <td></td>
                    <td>dekat sg balim boy pakai LYK236 (JULAI sampai 22.07.2023) - masa itu HENDRICK cuti</td>
                </tr>
                <tr>
                    <td>35</td>
                    <td>LYK234</td>
                    <td>320 GC</td>
                    <td>NO DRIVER</td>
                    <td>SG TRUS</td>
                    <td></td>
                    <td></td>
                </tr>
                <tr>
                    <td>36</td>
                    <td>LYK247</td>
                    <td>PC135F-10MO</td>
                    <td>PARMAN</td>
                    <td>SG TRUS</td>
                    <td></td>
                    <td></td>
                </tr>
                <tr>
                    <td>37</td>
                    <td>LYK201</td>
                    <td>320 GC</td>
                    <td>NO DRIVER</td>
                    <td>TAKAU</td>
                    <td></td>
                    <td>ROSAK</td>
                </tr>
                <tr>
                    <td>38</td>
                    <td>LYK230</td>
                    <td>PC210 - 10M0</td>
                    <td>EDI</td>
                    <td>TAKAU</td>
                    <td></td>
                    <td></td>
                </tr>
                <tr>
                    <td>39</td>
                    <td>LYK243</td>
                    <td>320 GX</td>
                    <td>NAIM</td>
                    <td>TAKAU</td>
                    <td></td>
                    <td></td>
                </tr>
                <tr>
                    <td>40</td>
                    <td>LYK248</td>
                    <td>320 GX</td>
                    <td>DAMAK</td>
                    <td>TAKAU</td>
                    <td></td>
                    <td></td>
                </tr>
                <tr>
                    <td>41</td>
                    <td>LYK208</td>
                    <td>ZX200-SG</td>
                    <td>SAMSUDDIN</td>
                    <td>TANIKU</td>
                    <td></td>
                    <td></td>
                </tr>
                <tr>
                    <td>42</td>
                    <td>LYK228</td>
                    <td>320GC</td>
                    <td>ASWAN</td>
                    <td>TANIKU</td>
                    <td></td>
                    <td></td>
                </tr>
                <tr>
                    <td>43</td>
                    <td>LYK232</td>
                    <td>320GC</td>
                    <td>KARIM</td>
                    <td>TANIKU</td>
                    <td></td>
                    <td></td>
                </tr>
                <tr>
                    <td>44</td>
                    <td>LYK244</td>
                    <td>320 GX</td>
                    <td>KADIR</td>
                    <td>TANIKU</td>
                    <td></td>
                    <td></td>
                </tr>
                <tr>
                    <td>45</td>
                    <td>LYK245</td>
                    <td>PC135F-10MO</td>
                    <td>SALMAN</td>
                    <td>TANIKU</td>
                    <td></td>
                    <td></td>
                </tr>
                <tr>
                    <td>46</td>
                    <td>LYK246</td>
                    <td>PC135F-10MO</td>
                    <td>SAHDAN</td>
                    <td>TANIKU</td>
                    <td></td>
                    <td></td>
                </tr>
                <tr>
                    <td>47</td>
                    <td>LYK114</td>
                    <td>D68ESS-12</td>
                    <td>NO DRIVER</td>
                    <td>TELABIT</td>
                    <td></td>
                    <td></td>
                </tr>
                <tr>
                    <td>48</td>
                    <td>LYK118</td>
                    <td>D6DLS</td>
                    <td>NO DRIVER</td>
                    <td>TELABIT</td>
                    <td></td>
                    <td></td>
                </tr>
                <tr>
                    <td>49</td>
                    <td>LYK215</td>
                    <td>EX120-5HG</td>
                    <td>NO DRIVER</td>
                    <td>TELABIT</td>
                    <td></td>
                    <td></td>
                </tr>
                <tr>
                    <td>50</td>
                    <td>LYK226</td>
                    <td>313D2 LGP</td>
                    <td>JOBE</td>
                    <td>TELABIT</td>
                    <td></td>
                    <td></td>
                </tr>
                <tr>
                    <td>51</td>
                    <td>LYK113</td>
                    <td>D68ESS-12</td>
                    <td>NO DRIVER</td>
                    <td>WORKSHOP</td>
                    <td></td>
                    <td></td>
                </tr>
                <tr>
                    <td>52</td>
                    <td>LYK115</td>
                    <td>D6DLS</td>
                    <td>NO DRIVER</td>
                    <td>WORKSHOP</td>
                    <td></td>
                    <td></td>
                </tr>
                </tbody>
            </table>
        <br>
    </div>
@endsection

@push('scripts')
    <script src="https://code.jquery.com/jquery-3.7.0.js"></script>
    <script src="https://cdn.datatables.net/1.13.7/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/1.13.7/js/dataTables.bootstrap5.min.js"></script>
    <script>
        new DataTable('#example2');
    </script>
@endpush
