

<!DOCTYPE html>
<html lang=en>
   <head>
      <?php include('include/header.php'); ?>
      <div id=wrapper>
         <header><?php include('include/navigation.php'); ?></header>
         <section id=inner-headline>
            <div class=container>
               <div class=row>
                  <div class=col-lg-12>
                     <ul class=breadcrumb>
                        <li><a href=index.php><i class="fa fa-home"></i></a><i class=icon-angle-right></i>
                        <li><a href=#></a><i class=icon-angle-right></i>
                        <li class=active>Error
                     </ul>
                  </div>
               </div>
            </div>
         </section>
         <section id=content>
            <div class=container>
               <div class=row>
                  <div class=col-lg-12>
                     <div class=text-center>
                        <h2 class=error>Error<br></h2>
                        <p class=lead>There was an error while submitting the form. Please try again later</p>
                        <a href=contact-us.php class="btn btn-md btn-theme marginbot50"><i class="fa fa-home"></i> Go back</a>
                     </div>
                  </div>
               </div>
            </div>
         </section>
      </div>
      <?php include('include/footer.php'); ?>
