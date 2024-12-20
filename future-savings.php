<?php
/**
 * Genesis Framework.
 *
 * WARNING: This file is part of the core Genesis Framework. DO NOT edit this file under any circumstances.
 * Please do all modifications in the form of a child theme.
 *
 * @package Genesis\Templates
 * @author  StudioPress
 * @license GPL-2.0+
 * @link    http://my.studiopress.com/themes/genesis/
 */

/*
Template Name: Future Savings
*/


remove_action( 'genesis_loop', 'genesis_do_loop' );
add_action( 'genesis_loop', 'custom_genesis_standard_loop' );

remove_action( 'genesis_after_content', 'genesis_get_sidebar' );


function custom_genesis_standard_loop() {

	//* Use old loop hook structure if not supporting HTML5
	if ( ! genesis_html5() ) {
		genesis_legacy_loop();
		return;
	}

	if ( have_posts() ) :

		do_action( 'genesis_before_while' );
		while ( have_posts() ) : the_post();

			do_action( 'genesis_before_entry' );

			printf( '<section class="subpage-container"><div class="wrap">' );
			?>

<div class="custom-calc">
  <table border="0" align="center">
    <tbody>
      <tr>
        <td></td>
        <td><span face="Arial,Helvetica">Calculate <a href="/financial-calculators/loan-payments/">Loan Payments</a></span></td>
      </tr>
      <tr>
        <td></td>
        <td><span face="Arial,Helvetica">Calculate <a href="/financial-calculators/rate-vs-rebate/">Rate vs. Rebate</a></span></td>
      </tr>
      <tr>
        <td></td>
        <td><span face="Arial,Helvetica">Calculate <a href="/financial-calculators/amortization/">Amortization</a></span></td>
      </tr>
      <tr>
        <td></td>
        <td><span face="Arial,Helvetica">Calculate <a href="/financial-calculators/future-savings/">Future Savings</a></span></td>
      </tr>
      <tr>
        <td></td>
        <td><span face="Arial,Helvetica">Calculate <a href="/financial-calculators/kids/">Kids Savings</a></span></td>
      </tr>
    </tbody>
  </table>
  <br />
  
  
  
  <center>
    <form name="frmCalc" action="https://www.membersourcecu.org/financial-calculators/future-savings/?TYPE=Future" method="get" onsubmit="javascript:return ValidateForm(this)">
      <input type="Hidden" name="TYPE" value="Future" aria-label="future-saving">
      <table bordercolor="slategray" cellspacing="0" bordercolordark="black" cellpadding="0" width="350" bordercolorlight="slategray" border="7">
        <tbody>
          <tr>
            <td><!--start of calculator table--> 
              
              <!--***********************************************************************************************
********************************************* Future Savings **********************************
***********************************************************************************************-->
              
              <table cellspacing="0" cellpadding="0" width="100%" bgcolor="#dfeaf9" border="0">
                <tbody>
                  <tr>
                    <td align="middle" colspan="2">
                    
                    <?php 
					 $result = ($_GET["ENTER"]);
					 if($result == 'Enter') { ?>
                    
                      <table bordercolor="slategray" cellspacing="0" bordercolordark="black" cellpadding="0" width="75%" bordercolorlight="slategray" border="7">
                        <tbody>
                          <tr>
                            <td align="middle" bgcolor="#385a88">
                              <!-- Begin Edititable portion Top of Calculator Here--> 
                              <div style="padding:0px 10px;">
                              <span face="Arial" color="yellow" size="2">
                              With a starting amount of $<?php echo $_GET['STARTINGAMOUNT']; ?> and a payment of $<?php echo $_GET['PAYMENT']; ?> for <?php echo $_GET['TERM']; ?> years at a rate of <?php echo $_GET['INTEREST']; ?>% <br>
                              <strong>Your Future Savings Results are as follows: </strong><span color="white"><br>
                              After <?php echo $_GET['TERM']; ?> years...<br>
                              You would have<br>
                              <?php $totalvalue = $_GET['STARTINGAMOUNT']+$_GET['PAYMENT']*($_GET['TERM']*12)*(1+$_GET['INTEREST']/100); echo '$'.$totalvalue; ?> in savings!</span> 
                              
                              <!-- End Edititable portion Top of Calculator--> 
                              <br>
                              </span></div></td>
                          </tr>
                        </tbody>
                      </table>
                      
                      <?php } ?>
                      
                      </td>
                  </tr>
                  <tr>
                    <td colspan="2"><hr></td>
                  </tr>
                  <tr>
                    <td align="middle"><span face="ARIAL" color="black" size="2"><nobr><strong>Payment<br>
                      <span face="ARIAL" size="2">
                      <input size="9" value="" name="PAYMENT" aria-label="f-payment">
                      $</span></strong></nobr></span></td>
                    <td align="middle"><span face="ARIAL" size="2"><span color="black"><nobr><strong>Term<br>
                      <span face="ARIAL" size="2">
                      <input size="9" value="" name="TERM" aria-label="f-term">
                      Yrs</span></strong></nobr></span></span></td>
                  </tr>
                  <tr>
                    <td colspan="2"><hr></td>
                  </tr>
                  <tr>
                    <td align="middle"><span face="ARIAL" size="2"><span color="black"><nobr><strong>Interest 
                      Rate<br>
                      <span face="ARIAL" size="3">
                      <input size="9" value="" name="INTEREST" aria-label="f-rate">
                      %</span></strong></nobr></span></span></td>
                    <td align="middle"><span face="ARIAL" size="2"><span color="black"><nobr><strong>StartingAmount<br>
                      <span face="ARIAL" size="2">
                      <input size="9" value="" name="STARTINGAMOUNT" aria-label="f-amount">
                      $</span></strong></nobr></span></span></td>
                  </tr>
                  <tr>
                    <td colspan="2"><hr></td>
                  </tr>
                  <tr>
                    <td align="middle" colspan="2"><input type="submit" value="Enter" name="ENTER"><br /><br />
                      </td>
                  </tr>
                </tbody>
              </table>
              
              <!-- end of calculator table--></td>
          </tr>
        </tbody>
      </table>
    </form>
  </center>
  <center>
    <hr width="150">
    <table bordercolor="slategray" cellspacing="0" bordercolordark="black" cellpadding="0" bordercolorlight="slategray" border="4">
      <tbody>
        <tr>
          <td><table cellspacing="0" cellpadding="2" bgcolor="#dfeaf9">
              <tbody>
                <tr>
                  <td><div style="padding:0px 10px;"><span face="Arial, Times New Roman"><span size="2"><span color="blue"><strong>Help 
                    Information</strong><br>
                    Use this calculator to determine the value of your savings 
                    given...</span></span></span></div></td>
                </tr>
                <tr>
                  <td><span face="Arial, Times New Roman"><span size="2">
                    <strong>[PAYMENT]</strong> - The standard monthly 
                    contribution</span></span></td>
                </tr>
                <tr>
                  <td><span face="Arial, Times New Roman"><span size="2">
                    <strong>[TERM]</strong> - The number of years of 
                    contribution</span></span></td>
                </tr>
                <tr>
                  <td><span face="Arial, Times New Roman"><span size="2">
                    <strong>[INTEREST]</strong> - The interest 
                    rate</span></span></td>
                </tr>
                <tr>
                  <td><span face="Arial, Times New Roman"><span size="2">
                    <strong>[STARTING AMOUNT]</strong> - And the starting balance in 
                    savings</span></span></td>
                </tr>
                <tr>
                  <td>&nbsp;</td>
                </tr>
              </tbody>
            </table></td>
        </tr>
      </tbody>
    </table>
    <hr width="150">
  </center>
</div>
<?php
			printf( '</div></section>' );

			do_action( 'genesis_after_entry' );

		endwhile; //* end of one post
		do_action( 'genesis_after_endwhile' );
	
		printf( '<div class="footer-breadcrumb">' );	
				breadcrumb_hook();
			printf( '</div>' );

		dynamic_sidebar( 'footer-banner-widget' ); 

	else : //* if no posts exist
		do_action( 'genesis_loop_else' );
	endif; //* end loop

}
//* Remove edit link
add_filter( 'genesis_edit_post_link' , '__return_false' );
genesis();





