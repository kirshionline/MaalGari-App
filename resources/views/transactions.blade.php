
@extends('layouts.app')

@section('content')

   <div class="content-wrapper" style="margin: 0px;">
         <section class="content-header">
            <h1>Payment Details<small></small></h1>
            <ol class="breadcrumb">
               <li><a href="http://nikola.world/admin"><i class="fa fa-dashboard"></i>Home</a></li>
               <li class="active"><i class="fa fa-user"></i> Payment Details</li>
            </ol>
         </section>
         <!-- Main content -->
         <section class="content">
            <div class="row">
               <div class="col-xs-12">
                  <div class="box box-info">
                     <div class="box-body">
                        <div class="box-header">
                           <div class="map_content">
                              <p class="lead para_mid">
                                 Listed here are all the Transactions & Payments made by each passenger for the rides undertaken by them.
                              </p>
                           </div>
                           <table id="example1" class="table table-bordered table-striped">
                              <thead>
                                 <tr>
                                    <th>Request Id</th>
                                    <th>Transaction Id</th>
                                    <th>Paid by</th>
                                    <th>Paid to</th>
                                    <th>Total Amount</th>
                                    <th>Payment Mode</th>
                                    <th>Date &amp;Time</th>
                                    <th>Payment Status</th>
                                 </tr>
                              </thead>
                              <tbody>
                                 <tr>
                                    <td>8459</td>
                                    <td>5d1347a3c7041</td>
                                    <td>Anandhu Bose</td>
                                    <td>ratheesh vijayan</td>
                                    <td>₹5</td>
                                    <td>cod</td>
                                    <td>2019-06-26 10:23:31</td>
                                    <td> <span class="label label-success">Paid</span> </td>
                                 </tr>
                                 <tr>
                                    <td>8456</td>
                                    <td>5d1246f0df0eb</td>
                                    <td>Ashaq Munshi</td>
                                    <td>a x</td>
                                    <td>₹10.52</td>
                                    <td>cod</td>
                                    <td>2019-06-25 16:08:16</td>
                                    <td> <span class="label label-success">Paid</span> </td>
                                 </tr>
                                 <tr>
                                    <td>8455</td>
                                    <td>5d123ab790781</td>
                                    <td>Aroof Shaikh</td>
                                    <td>Aroof shaikh</td>
                                    <td>₹10.5</td>
                                    <td>cod</td>
                                    <td>2019-06-25 15:16:07</td>
                                    <td> <span class="label label-success">Paid</span> </td>
                                 </tr>
                                 <tr>
                                    <td>8454</td>
                                    <td>5d11e32cc14f6</td>
                                    <td>Rajkumar Yadav</td>
                                    <td>Raj Kumar Yadav</td>
                                    <td>₹10.5</td>
                                    <td>cod</td>
                                    <td>2019-06-25 09:02:36</td>
                                    <td> <span class="label label-success">Paid</span> </td>
                                 </tr>
                                 <tr>
                                    <td>8451</td>
                                    <td>5d112637a64d1</td>
                                    <td> </td>
                                    <td>ravi chinta</td>
                                    <td>₹33.66</td>
                                    <td>cod</td>
                                    <td>2019-06-24 19:36:23</td>
                                    <td> <span class="label label-danger">not Paid</span> </td>
                                 </tr>
                                 <tr>
                                    <td>8447</td>
                                    <td>5d0f9316335ae</td>
                                    <td>Rajkumar Yadav</td>
                                    <td>Raj Kumar Yadav</td>
                                    <td>₹10.5</td>
                                    <td>cod</td>
                                    <td>2019-06-23 14:56:22</td>
                                    <td> <span class="label label-success">Paid</span> </td>
                                 </tr>
                                 <tr>
                                    <td>8446</td>
                                    <td>5d0efbc3b779b</td>
                                    <td>Rajkumar Yadav</td>
                                    <td>Raj Kumar Yadav</td>
                                    <td>₹10.84</td>
                                    <td>cod</td>
                                    <td>2019-06-23 04:10:43</td>
                                    <td> <span class="label label-success">Paid</span> </td>
                                 </tr>
                                 <tr>
                                    <td>8444</td>
                                    <td>5d0df1b6549a4</td>
                                    <td>zyroix Inc</td>
                                    <td>Chi Eze</td>
                                    <td>₹5</td>
                                    <td>cod</td>
                                    <td>2019-06-22 09:15:34</td>
                                    <td> <span class="label label-danger">not Paid</span> </td>
                                 </tr>
                                 <tr>
                                    <td>8443</td>
                                    <td>5d0df09f634c8</td>
                                    <td>zyroix Inc</td>
                                    <td>Chi Eze</td>
                                    <td>₹5</td>
                                    <td>cod</td>
                                    <td>2019-06-22 09:10:55</td>
                                    <td> <span class="label label-success">Paid</span> </td>
                                 </tr>
                                 <tr>
                                    <td>8442</td>
                                    <td>5d0b26872c102</td>
                                    <td>Cooper Group</td>
                                    <td>vj kum</td>
                                    <td>₹10.5</td>
                                    <td>cod</td>
                                    <td>2019-06-20 06:24:07</td>
                                    <td> <span class="label label-danger">not Paid</span> </td>
                                 </tr>
                                 <tr>
                                    <td>8441</td>
                                    <td>5d0b2456a5027</td>
                                    <td>Cooper Group</td>
                                    <td>vj kum</td>
                                    <td>₹11.63</td>
                                    <td>cod</td>
                                    <td>2019-06-20 06:14:46</td>
                                    <td> <span class="label label-success">Paid</span> </td>
                                 </tr>
                                 <tr>
                                    <td>8440</td>
                                    <td>5d0afe04e456d</td>
                                    <td>Cooper Group</td>
                                    <td>vj kum</td>
                                    <td>₹10.54</td>
                                    <td>cod</td>
                                    <td>2019-06-20 03:31:16</td>
                                    <td> <span class="label label-success">Paid</span> </td>
                                 </tr>
                                 <tr>
                                    <td>8439</td>
                                    <td>5d0abae9edc32</td>
                                    <td>Nithya Shajee</td>
                                    <td>Shajee Peter</td>
                                    <td>₹318.53</td>
                                    <td>cod</td>
                                    <td>2019-06-19 22:44:57</td>
                                    <td> <span class="label label-success">Paid</span> </td>
                                 </tr>
                                 <tr>
                                    <td>8437</td>
                                    <td>5d0a3214e38b0</td>
                                    <td>Sanjeev Kumar</td>
                                    <td>My Self</td>
                                    <td>₹10.5</td>
                                    <td>cod</td>
                                    <td>2019-06-19 13:01:08</td>
                                    <td> <span class="label label-success">Paid</span> </td>
                                 </tr>
                                 <tr>
                                    <td>8436</td>
                                    <td>5d08256b59dc8</td>
                                    <td>Nithya Shajee</td>
                                    <td>Shajee Peter</td>
                                    <td>₹323.62</td>
                                    <td>cod</td>
                                    <td>2019-06-17 23:42:35</td>
                                    <td> <span class="label label-success">Paid</span> </td>
                                 </tr>
                                 <tr>
                                    <td>8435</td>
                                    <td>5d07b8c254c8b</td>
                                    <td>Felipe Cort&eacute;s</td>
                                    <td>Prueba Prueba</td>
                                    <td>₹10.52</td>
                                    <td>cod</td>
                                    <td>2019-06-17 15:58:58</td>
                                    <td> <span class="label label-success">Paid</span> </td>
                                 </tr>
                                 <tr>
                                    <td>8433</td>
                                    <td>5d0250b8f4138</td>
                                    <td>PK PK</td>
                                    <td>Sopheak KH</td>
                                    <td>₹10.5</td>
                                    <td>cod</td>
                                    <td>2019-06-13 13:33:44</td>
                                    <td> <span class="label label-success">Paid</span> </td>
                                 </tr>
                                 <tr>
                                    <td>8420</td>
                                    <td>5d01d84652bf6</td>
                                    <td>PK PK</td>
                                    <td>Sopheak KH</td>
                                    <td>₹10.52</td>
                                    <td>cod</td>
                                    <td>2019-06-13 04:59:50</td>
                                    <td> <span class="label label-success">Paid</span> </td>
                                 </tr>
                                 <tr>
                                    <td>8419</td>
                                    <td>5d014c52672c1</td>
                                    <td>Daniel  Ram&iacute;rez </td>
                                    <td>Prueba Prueba</td>
                                    <td>₹10.5</td>
                                    <td>cod</td>
                                    <td>2019-06-12 19:02:42</td>
                                    <td> <span class="label label-success">Paid</span> </td>
                                 </tr>
                                 <tr>
                                    <td>8417</td>
                                    <td>5d0129bcc9e06</td>
                                    <td>Felipe Cort&eacute;s</td>
                                    <td>Prueba Prueba</td>
                                    <td>₹0</td>
                                    <td>cod</td>
                                    <td>2019-06-12 16:35:08</td>
                                    <td> <span class="label label-success">Paid</span> </td>
                                 </tr>
                                 <tr>
                                    <td>8415</td>
                                    <td>5d00f3eac9cca</td>
                                    <td>alejo facundo </td>
                                    <td>alejo1 aqu&iacute;</td>
                                    <td>₹14.85</td>
                                    <td>cod</td>
                                    <td>2019-06-12 12:45:30</td>
                                    <td> <span class="label label-success">Paid</span> </td>
                                 </tr>
                                 <tr>
                                    <td>8414</td>
                                    <td>5d00f33216c65</td>
                                    <td>alejo facundo </td>
                                    <td>alejo1 aqu&iacute;</td>
                                    <td>₹10.56</td>
                                    <td>cod</td>
                                    <td>2019-06-12 12:42:26</td>
                                    <td> <span class="label label-success">Paid</span> </td>
                                 </tr>
                                 <tr>
                                    <td>8411</td>
                                    <td>5cffab8e8a9ff</td>
                                    <td> </td>
                                    <td>Shajee peter</td>
                                    <td>₹11.78</td>
                                    <td>cod</td>
                                    <td>2019-06-11 13:24:30</td>
                                    <td> <span class="label label-success">Paid</span> </td>
                                 </tr>
                                 <tr>
                                    <td>8410</td>
                                    <td>5cfd738000a6a</td>
                                    <td>Brynjar Ingi</td>
                                    <td>Einar Ragnarsson</td>
                                    <td>₹28.61</td>
                                    <td>cod</td>
                                    <td>2019-06-09 21:00:47</td>
                                    <td> <span class="label label-success">Paid</span> </td>
                                 </tr>
                                 <tr>
                                    <td>8405</td>
                                    <td>5cfba4da4d160</td>
                                    <td>Djo Rocas</td>
                                    <td>Manix Smolder</td>
                                    <td>₹10.5</td>
                                    <td>cod</td>
                                    <td>2019-06-08 12:06:50</td>
                                    <td> <span class="label label-success">Paid</span> </td>
                                 </tr>
                                 <tr>
                                    <td>8397</td>
                                    <td>5cf706333998e</td>
                                    <td>Einar Ragnarsson</td>
                                    <td>Einar Ragnarsson</td>
                                    <td>₹16.43</td>
                                    <td>cod</td>
                                    <td>2019-06-05 00:00:51</td>
                                    <td> <span class="label label-success">Paid</span> </td>
                                 </tr>
                                 <tr>
                                    <td>8395</td>
                                    <td>5cf44350b7398</td>
                                    <td>Abdallah Hesham</td>
                                    <td>abdallah hesham</td>
                                    <td>₹10.54</td>
                                    <td>cod</td>
                                    <td>2019-06-02 21:44:48</td>
                                    <td> <span class="label label-success">Paid</span> </td>
                                 </tr>
                                 <tr>
                                    <td>8394</td>
                                    <td>5cf249990af30</td>
                                    <td>Raj Pokhrel</td>
                                    <td>ccc pp</td>
                                    <td>₹11.14</td>
                                    <td>cod</td>
                                    <td>2019-06-01 09:47:05</td>
                                    <td> <span class="label label-success">Paid</span> </td>
                                 </tr>
                                 <tr>
                                    <td>8388</td>
                                    <td>5cefb1670baac</td>
                                    <td>Vikas Pagare</td>
                                    <td>vikas pagare</td>
                                    <td>₹10.5</td>
                                    <td>cod</td>
                                    <td>2019-05-30 10:33:11</td>
                                    <td> <span class="label label-success">Paid</span> </td>
                                 </tr>
        
                                 <tr>
                                    <td>8337</td>
                                    <td>5cdac064eef39</td>
                                    <td>Gabriele Viana</td>
                                    <td>Caesar Roger</td>
                                    <td>₹10.58</td>
                                    <td>cod</td>
                                    <td>2019-05-14 13:19:32</td>
                                    <td> <span class="label label-danger">not Paid</span> </td>
                                 </tr>

                              </tbody>
                           </table>
                        </div>
                     </div>
                  </div>
               </div>
         </section>
         </div>
         <!-- include('layouts.admin.footer') -->
         <!-- include('layouts.admin.left-side-bar') -->
      </div>

@endsection
@section('scripts')
<script>
   $(function () {
    
     $('#example1').DataTable({
       'paging'      : true,
       'lengthChange': true,
       'searching'   : true,
       'ordering'    : true,
       'info'        : true,
       'autoWidth'   : false
     });
   });
   setTimeout(function(){ 

    $('.Danger').fadeOut();
 }, 3000);

</script>
@endsection