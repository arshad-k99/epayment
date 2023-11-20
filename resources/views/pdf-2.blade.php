<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
</head>
   <body>
      <table width="956" height="196" border="0" cellpadding="0" cellspacing="0" style="margin:auto">
         <tr>
            <td colspan="3" style="font-family:Arial, Helvetica, sans-serif; padding-bottom:5px; font-size: 16px; ">
               <table width="956" height="196" border="0" cellpadding="0" cellspacing="0" style="margin:auto">
                  <tr>
                     <td style="padding-bottom: 10px;" width="37" height="69" scope="row">&nbsp;</td>
                     <td style="padding-bottom: 10px;" width="72"><img src="images/qr.jpg" width="67" height="67" /></td>
                     <td style="padding-bottom: 10px;" width="547">
                        <h1 style="margin:0; font-family:Arial, Helvetica, sans-serif; font-size:30px">INCOME TAX DEPARTMENT</h1>
                        <p style="margin:0; font-family:Arial, Helvetica, sans-serif; font-size:20px">Challan Receipt

                        </p>
                     </td>
                     <td width="260" >
                        <div style="border-left:solid 1px #ccc" align="center"><img src="images/logo.jpg" width="202" height="48" /></div>
                     </td>
                     <td width="40">&nbsp;</td>
                  </tr>
                  <tr>
                     <td  >&nbsp;</td>
                     <td style="border-top:solid 1px #000">&nbsp;</td>
                     <td style="border-top:solid 1px #000">&nbsp;</td>
                     <td style="border-top:solid 1px #000">&nbsp;</td>
                  </tr>
                  <tr>
                     <td scope="row">&nbsp;</td>
                     <td colspan="3" style="font-family:Arial, Helvetica, sans-serif; padding-bottom:5px; font-size: 16px; "><strong>ITNS No. : 281 </strong></td>
                     <td>&nbsp;</td>
                  </tr>
                  <tr>
                     <td scope="row">&nbsp;</td>
                     <td colspan="3" style="font-family:Arial, Helvetica, sans-serif; padding-bottom:5px; font-size: 16px; ">
                        <table width="100%" border="0" cellpadding="0" cellspacing="0" style="border-left:solid 1px #656565; border-right:solid 1px #656565;  border-top:solid 1px #656565">
                           <tr>
                              <td width="29%"  style="border-bottom:solid 1px #656565; font-family:Arial, Helvetica, sans-serif; font-size:13px; padding:10px">TAN</td>
                              <td width="71%" style="border-bottom:solid 1px #656565; font-family:Arial, Helvetica, sans-serif; font-size:13px; padding:10px"><strong>: {{ isset($data->pan_number) ? $data->pan_number : null }} </strong></td>
                           </tr>
                           <tr>
                              <td  style="border-bottom:solid 1px #656565; font-family:Arial, Helvetica, sans-serif; font-size:13px; padding:10px">Name</td>
                              <td style="border-bottom:solid 1px #656565; font-family:Arial, Helvetica, sans-serif; font-size:13px; padding:10px"><strong>: SWAPNA PHARMA KOTACHERY</strong></td>
                           </tr>
                           <tr>
                              <td  style="border-bottom:solid 1px #656565; font-family:Arial, Helvetica, sans-serif; font-size:13px; padding:10px">Assessment Year</td>
                              <td style="border-bottom:solid 1px #656565; font-family:Arial, Helvetica, sans-serif; font-size:13px; padding:10px"><strong>:  {{ isset($data->assessment_year) ? $data->assessment_year : null }}</strong></td>
                           </tr>
                           <tr>
                              <td  style="border-bottom:solid 1px #656565; font-family:Arial, Helvetica, sans-serif; font-size:13px; padding:10px">Financial Year </td>
                              <td style="border-bottom:solid 1px #656565; font-family:Arial, Helvetica, sans-serif; font-size:13px; padding:10px"><strong>:  {{ isset($data->financial_year) ? $data->financial_year : null }}</strong></td>
                           </tr>
                           <tr>
                              <td  style="border-bottom:solid 1px #656565; font-family:Arial, Helvetica, sans-serif; font-size:13px; padding:10px">Major Head</td>
                              <td style="border-bottom:solid 1px #656565; font-family:Arial, Helvetica, sans-serif; font-size:13px; padding:10px"><strong>: {{ isset($data->major_head) ? $data->major_head : null }}</strong></td>
                           </tr>
                           <tr>
                              <td  style="border-bottom:solid 1px #656565; font-family:Arial, Helvetica, sans-serif; font-size:13px; padding:10px">Minor Head</td>
                              <td style="border-bottom:solid 1px #656565; font-family:Arial, Helvetica, sans-serif; font-size:13px; padding:10px"><strong>: TDS/TCS Payable by Taxpayer (200)</strong></td>
                           </tr>
                           <tr>
                              <td  style="border-bottom:solid 1px #656565; font-family:Arial, Helvetica, sans-serif; font-size:13px; padding:10px">Nature of Payment</td>
                              <td style="border-bottom:solid 1px #656565; font-family:Arial, Helvetica, sans-serif; font-size:13px; padding:10px"><strong>: 94Q</strong></td>
                           </tr>
                           <tr>
                              <td  style="border-bottom:solid 1px #656565; font-family:Arial, Helvetica, sans-serif; font-size:13px; padding:10px">Amount (in Rs.) </td>
                              <td style="border-bottom:solid 1px #656565; font-family:Arial, Helvetica, sans-serif; font-size:13px; padding:10px"><strong>: <span style="font-family: DejaVu Sans; sans-serif;">&#8377;</span>
 {{ isset($data->total) ? $data->total : 0 }}</strong></td>
                           </tr>
                           <tr>
                              <td  style="border-bottom:solid 1px #656565; font-family:Arial, Helvetica, sans-serif; font-size:13px; padding:10px">Amount (in words) </td>
                              <td style="border-bottom:solid 1px #656565; font-family:Arial, Helvetica, sans-serif; font-size:13px; padding:10px"><strong>: {{ isset($data->total_in_words) ? $data->total_in_words : null }} </strong></td>
                           </tr>
                           <tr>
                              <td  style="border-bottom:solid 1px #656565; font-family:Arial, Helvetica, sans-serif; font-size:13px; padding:10px">CIN</td>
                              <td style="border-bottom:solid 1px #656565; font-family:Arial, Helvetica, sans-serif; font-size:13px; padding:10px"><strong>: 23100600378332RBIS</strong></td>
                           </tr>
                           <tr>
                              <td  style="border-bottom:solid 1px #656565; font-family:Arial, Helvetica, sans-serif; font-size:13px; padding:10px">Mode of Payment </td>
                              <td style="border-bottom:solid 1px #656565; font-family:Arial, Helvetica, sans-serif; font-size:13px; padding:10px"><strong>: {{ isset($data->model_of_payment) ? $data->model_of_payment : null }}</strong></td>
                           </tr>
                           <tr>
                              <td  style="border-bottom:solid 1px #656565; font-family:Arial, Helvetica, sans-serif; font-size:13px; padding:10px">Bank Name </td>
                              <td style="border-bottom:solid 1px #656565; font-family:Arial, Helvetica, sans-serif; font-size:13px; padding:10px"><strong>: {{ isset($data->bank_name) ? $data->bank_name : null }}</strong></td>
                           </tr>
                           <tr>
                              <td  style="border-bottom:solid 1px #656565; font-family:Arial, Helvetica, sans-serif; font-size:13px; padding:10px">Bank Reference Number </td>
                              <td style="border-bottom:solid 1px #656565; font-family:Arial, Helvetica, sans-serif; font-size:13px; padding:10px"><strong>: 20231006163150169286 </strong></td>
                           </tr>
                           <tr>
                              <td  style="border-bottom:solid 1px #656565; font-family:Arial, Helvetica, sans-serif; font-size:13px; padding:10px">Date of Deposit </td>
                              <td style="border-bottom:solid 1px #656565; font-family:Arial, Helvetica, sans-serif; font-size:13px; padding:10px"><strong>: {{ isset($data->created_at) ? $data->created_at->format('d-M-Y')  : null }} </strong></td>
                           </tr>
                           <tr>
                              <td  style="border-bottom:solid 1px #656565; font-family:Arial, Helvetica, sans-serif; font-size:13px; padding:10px">BSR code</td>
                              <td style="border-bottom:solid 1px #656565; font-family:Arial, Helvetica, sans-serif; font-size:13px; padding:10px"><strong>: 6939001</strong></td>
                           </tr>
                           <tr>
                              <td  style="border-bottom:solid 1px #656565; font-family:Arial, Helvetica, sans-serif; font-size:13px; padding:10px">Challan No</td>
                              <td style="border-bottom:solid 1px #656565; font-family:Arial, Helvetica, sans-serif; font-size:13px; padding:10px"><strong>: 16022</strong></td>
                           </tr>
                           <tr>
                              <td  style="border-bottom:solid 1px #656565; font-family:Arial, Helvetica, sans-serif; font-size:13px; padding:10px">Tender Date</td>
                              <td style="border-bottom:solid 1px #656565; font-family:Arial, Helvetica, sans-serif; font-size:13px; padding:10px"><strong>: 06/10/2023</strong></td>
                           </tr>
                        </table>
                     </td>
                     <td>&nbsp;</td>
                  </tr>
                  <tr>
                     <td scope="row">&nbsp;</td>
                     <td colspan="3" style="font-family:Arial, Helvetica, sans-serif; padding-bottom:5px; font-size: 16px; "></td>
                     <td>&nbsp;</td>
                  </tr>
                  <tr>
                     <td scope="row">&nbsp;</td>
                     <td colspan="3" style="font-family:Arial, Helvetica, sans-serif; padding-bottom:5px; font-size: 16px; "><strong>Tax Breakup Details (Amount In ₹)</strong></td>
                     <td>&nbsp;</td>
                  </tr>
                  <tr>
                     <td scope="row">&nbsp;</td>
                     <td colspan="3" style="font-family:Arial, Helvetica, sans-serif; padding-bottom:5px; font-size: 16px; ">
                        <table width="100%" border="0" cellpadding="0" cellspacing="0" style="border-left:solid 1px #656565; border-right:solid 1px #656565;  border-top:solid 1px #656565">
                           <tr>
                              <td width="16%"  style="border-bottom:solid 1px #656565; font-family:Arial, Helvetica, sans-serif; font-size:13px; padding:10px">A</td>
                              <td width="19%"  style="border-bottom:solid 1px #656565; font-family:Arial, Helvetica, sans-serif; font-size:13px; padding:10p x">Tax</td>
                              <td width="65%" style="border-bottom:solid 1px #656565; font-family:Arial, Helvetica, sans-serif; font-size:13px; padding:10px" align="right"><strong> <span style="font-family: DejaVu Sans; sans-serif;">&#8377;</span>
  {{ isset($data->tax) ? $data->tax : 0 }}</strong></td>
                           </tr>
                           <tr>
                              <td width="16%"  style="border-bottom:solid 1px #656565; font-family:Arial, Helvetica, sans-serif; font-size:13px; padding:10px">B</td>
                              <td width="19%"  style="border-bottom:solid 1px #656565; font-family:Arial, Helvetica, sans-serif; font-size:13px; padding:10p x">Surcharge</td>
                              <td width="65%" style="border-bottom:solid 1px #656565; font-family:Arial, Helvetica, sans-serif; font-size:13px; padding:10px" align="right"><strong><span style="font-family: DejaVu Sans; sans-serif;">&#8377;</span>
  {{ isset($data->surcharge) ? $data->surcharge : 0 }}</strong></td>
                           </tr>
                           <tr>
                              <td width="16%"  style="border-bottom:solid 1px #656565; font-family:Arial, Helvetica, sans-serif; font-size:13px; padding:10px">C</td>
                              <td width="19%"  style="border-bottom:solid 1px #656565; font-family:Arial, Helvetica, sans-serif; font-size:13px; padding:10p x">Cess</td>
                              <td width="65%" style="border-bottom:solid 1px #656565; font-family:Arial, Helvetica, sans-serif; font-size:13px; padding:10px" align="right"><strong><span style="font-family: DejaVu Sans; sans-serif;">&#8377;</span>
  {{ isset($data->cess) ? $data->cess : 0 }} </strong></td>
                           </tr>
                           <tr>
                              <td width="16%"  style="border-bottom:solid 1px #656565; font-family:Arial, Helvetica, sans-serif; font-size:13px; padding:10px">D</td>
                              <td width="19%"  style="border-bottom:solid 1px #656565; font-family:Arial, Helvetica, sans-serif; font-size:13px; padding:10p x">Interest</td>
                              <td width="65%" style="border-bottom:solid 1px #656565; font-family:Arial, Helvetica, sans-serif; font-size:13px; padding:10px" align="right"><strong><span style="font-family: DejaVu Sans; sans-serif;">&#8377;</span>
  {{ isset($data->interest) ? $data->interest : 0 }}</strong></td>
                           </tr>
                           <tr>
                              <td width="16%"  style="border-bottom:solid 1px #656565; font-family:Arial, Helvetica, sans-serif; font-size:13px; padding:10px">E</td>
                              <td width="19%"  style="border-bottom:solid 1px #656565; font-family:Arial, Helvetica, sans-serif; font-size:13px; padding:10p x">Penalty</td>
                              <td width="65%" style="border-bottom:solid 1px #656565; font-family:Arial, Helvetica, sans-serif; font-size:13px; padding:10px" align="right"><strong><span style="font-family: DejaVu Sans; sans-serif;">&#8377;</span>
  {{ isset($data->penalty) ? $data->penalty : 0 }} </strong></td>
                           </tr>
                           <tr>
                              <td width="16%"  style="border-bottom:solid 1px #656565; font-family:Arial, Helvetica, sans-serif; font-size:13px; padding:10px">F</td>
                              <td width="19%"  style="border-bottom:solid 1px #656565; font-family:Arial, Helvetica, sans-serif; font-size:13px; padding:10p x">Fee under section 234E</td>
                              <td width="65%" style="border-bottom:solid 1px #656565; font-family:Arial, Helvetica, sans-serif; font-size:13px; padding:10px" align="right"><strong><span style="font-family: DejaVu Sans; sans-serif;">&#8377;</span>
  {{ isset($data->section) ? $data->section : 0 }}</strong></td>
                           </tr>
                           <tr>
                              <td width="16%"  style="border-bottom:solid 1px #656565; font-family:Arial, Helvetica, sans-serif; font-size:13px; padding:10px">&nbsp;</td>
                              <td width="19%"  style="border-bottom:solid 1px #656565; font-family:Arial, Helvetica, sans-serif; font-size:13px; padding:10p x"><strong>Total (A+B+C+D+E+F)</strong></td>
                              <td width="65%" style="border-bottom:solid 1px #656565; font-family:Arial, Helvetica, sans-serif; font-size:13px; padding:10px" align="right"><strong><span style="font-family: DejaVu Sans; sans-serif;">&#8377;</span>
  {{ isset($data->total) ? $data->total : 0 }}</strong></td>
                           </tr>
                           <tr>
                              <td width="16%"  style="border-bottom:solid 1px #656565; font-family:Arial, Helvetica, sans-serif; font-size:13px; padding:10px">&nbsp;</td>
                              <td width="19%"  style="border-bottom:solid 1px #656565; font-family:Arial, Helvetica, sans-serif; font-size:13px; padding:10p x"><strong>Total (In Words)</strong></td>
                              <td width="65%" style="border-bottom:solid 1px #656565; font-family:Arial, Helvetica, sans-serif; font-size:13px; padding:10px" align="right"><strong>{{ isset($data->total_in_words) ? $data->total_in_words : null}}</strong></td>
                           </tr>
                        </table>
                     </td>
                  </tr>
                  
                  
                  
                  <tr>
                     <td scope="row">&nbsp;</td>
                     <td colspan="3" style="font-family:Arial, Helvetica, sans-serif; padding-bottom:5px; font-size: 16px; "></td>
                     <td>&nbsp;</td>
                  </tr>
                  
                  <tr>
                     <td scope="row">&nbsp;</td>
                     <td colspan="3" style="font-family:Arial, Helvetica, sans-serif; padding-bottom:5px; font-size: 16px; ">
                     <table width="100%" border="0" cellpadding="0" cellspacing="0" style="border:solid 1px #656565">
                       <tr>
                         <th style="border-right:solid 1px #656565; padding:10px" width="12%" scope="row"><img src="images/icn-01.jpg" width="71" height="83" /></th>
                         <td width="88%" style=" padding:10px"><strong style="font-size:20px">Thanks for being a committed taxpayer! </strong>
                         	 
                            <p>
                            To express gratitude towards committed taxpayers, the Income Tax Department has started a unique
appreciation initiative. It recognises taxpayers’ commitment by awarding certifcates of appreciation to
them.Login to e-fling portal and visit Appreciations and Rewards to know more.

                            </p>
                         </td>
                       </tr>
                     </table></td>
                     <td>&nbsp;</td>
                  </tr>
                  
                  <tr>
                     <td scope="row">&nbsp;</td>
                     <td colspan="3" style="font-family:Arial, Helvetica, sans-serif; padding-bottom:5px; font-size: 16px; border-bottom:solid 1px #656565 "></td>
                     <td>&nbsp;</td>
                  </tr>
                  <tr>
                     <td scope="row">&nbsp;</td>
                     <td colspan="3" style="font-family:Arial, Helvetica, sans-serif; padding-bottom:5px; font-size: 16px; "></td>
                     <td>&nbsp;</td>
                  </tr>
                  <tr>
                     <td scope="row">&nbsp;</td>
                     <td colspan="3" style="font-family:Arial, Helvetica, sans-serif; text-align:center; padding-bottom:5px; font-size: 16px; ">
                     <strong>Congrats! Here’s what you have just achieved by choosing to pay online: </strong>
</td>
                     <td>&nbsp;</td>
                  </tr>
                  
                  <tr>
                     <td scope="row">&nbsp;</td>
                    <td colspan="3" style="font-family:Arial, Helvetica, sans-serif; text-align:center; padding-bottom:5px; font-size: 16px; ">
                   	   <table width="80%" border="0" cellpadding="0" cellspacing="0" style="margin-left:auto; margin-right:auto" >
  <tr>
    <td width="39%"  style="text-align:center; font-size:13px; font-family:Arial, Helvetica, sans-serif" >
    <div ><img src="images/icn-02.jpg" /></div>
    <strong style="margin-top:15px; display:block; margin-bottom:15px">Time</strong><br />
    Paper e-Receipt  Quick and Seamless</td>
    <td width="27%"  style="text-align:center; font-size:13px; font-family:Arial, Helvetica, sans-serif">
    <div ><img src="images/icn-03.jpg" /></div>
    <strong style="margin-top:15px; display:block; margin-bottom:15px">Paper</strong><br />
    Save Environment    </td>
    <td width="34%" style="text-align:center; font-size:13px; font-family:Arial, Helvetica, sans-serif">
    <div ><img src="images/icn-04.jpg" /> </div>
    <strong style="margin-top:15px; display:block; margin-bottom:15px">e-Receipt</strong><br />
    Easy Access    </td>
  </tr>
</table>

                    </td>
                     <td>&nbsp;</td>
                  </tr>
               </table>
            </td>
         </tr>
      </table>
   </body>
</html>