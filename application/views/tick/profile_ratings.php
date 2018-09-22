<!DOCTYPE html>
<html lang="en">

<head>


<?php $this-> load ->view ('tick/partials/header'); ?>


<style>



.card {
    margin-bottom: 20px;
}

.card-header {
    position: relative;
    display: -webkit-box;
    display: -ms-flexbox;
    display: flex;
    -webkit-box-pack: center;
    -ms-flex-pack: center;
    justify-content: center;
    background-color: white;
    background-size: cover;
    background-position: center center;
    padding: 30px 15px;
    border-top-left-radius: 4px;
    border-top-right-radius: 4px;
}

.card-header-menu {
    position: absolute;
    top: 0;
    right: 0;
    height: 4em;
    width: 4em;
}

.card-header-menu:after {
    position: absolute;
    top: 0;
    right: 0;
    content: "";
    border-left: 2em solid transparent;
    border-bottom: 2em solid transparent;
    border-right: 2em solid #37a000;
    border-top: 2em solid #37a000;
    border-top-right-radius: 4px;
}

.card-header-menu i {
    position: absolute;
    top: 9px;
    right: 9px;
    color: #fff;
    z-index: 1;
}

.card-header-headshot {
    height: 10em;
    width: 10em;
    border-radius: 50%;
    border: 1px solid #37a000;
    background-image: url("<?php echo base_url(); ?>img/valuer1.jpg");
    background-size: cover;
    background-position: center center;
    box-shadow: 1px 3px 3px #3E4142;
}

.card-content-member {
    position: relative;
    background-color: #fff;
    padding: 1em;
    box-shadow: 0 2px 2px rgba(62, 65, 66, 0.15);
}

.card-content-member {
    text-align: center;
}

.card-content-member p i {
    font-size: 16px;
    margin-right: 10px;
}

.card-content-languages {
    background-color: #fff;
    padding: 15px;
}

.card-content-languages .card-content-languages-group {
    display: -webkit-box;
    display: -ms-flexbox;
    display: flex;
    padding-bottom: 0.5em;
}

.card-content-languages .card-content-languages-group:last-of-type {
    padding-bottom: 0;
}

.card-content-languages .card-content-languages-group > div:first-of-type {
    -webkit-box-flex: 0;
    -ms-flex: 0 0 5em;
    flex: 0 0 5em;
}

.card-content-languages h4 {
    line-height: 1.5em;
    margin: 0;
    font-size: 15px;
    font-weight: 500;
    letter-spacing: 0.5px;
}

.card-content-languages li {
    display: inline-block;
    padding-right: 0.5em;
    font-size: 0.9em;
    line-height: 1.5em;
}

.card-content-summary {
    background-color: #fff;
    padding: 15px;
}

.card-content-summary p {
    text-align: center;
    font-size: 12px;
    font-weight: 600;
}

.card-footer-stats {
    display: -webkit-box;
    display: -ms-flexbox;
    display: flex;
    background-color: #2c3136;
}

.card-footer-stats div {
    -webkit-box-flex: 1;
    -ms-flex: 1 0 33%;
    flex: 1 0 33%;
    padding: 0.75em;
}

.card-footer-stats div:nth-of-type(2) {
    border-left: 1px solid #3E4142;
    border-right: 1px solid #3E4142;
}

.card-footer-stats p {
    font-size: 0.8em;
    color: #A6A6A6;
    margin-bottom: 0.4em;
    font-weight: 600;
    text-transform: uppercase;
}

.card-footer-stats i {
    color: #ddd;
}

.card-footer-stats span {
    color: #ddd;
}

.card-footer-stats span.stats-small {
    font-size: 0.9em;
}

.card-footer-message {
    background-color: #37a000;
    padding: 15px;
    border-bottom-left-radius: 4px;
    border-bottom-right-radius: 4px;
}

.card-footer-message h4 {
    margin: 0;
    text-align: center;
    color: #fff;
    font-weight: 400;
}

.review-number {
    float: left;
    width: 35px;
    line-height: 1;
}

.review-number div {
    height: 9px;
    margin: 5px 0
}

.review-progress {
    float: left;
    width: 230px;
}

.review-progress .progress {
    margin: 8px 0;
}

.progress-number {
    margin-left: 10px;
    float: left;
}

.rating-block,
.review-block {
    background-color: #fff;
    border: 1px solid #e1e6ef;
    padding: 15px;
    border-radius: 4px;
    margin-bottom: 20px;
}

.review-block {
    margin-bottom: 20px;
}

.review-block-img img {
    height: 60px;
    width: 60px;
}

.review-block-name {
    font-size: 12px;
    margin: 10px 0;
    font-weight: 600;
    text-transform: uppercase;
    letter-spacing: 0.5px;
}

.review-block-name a {
    color: #374767;
}

.review-block-date {
    font-size: 12px;
}

.review-block-rate {
    font-size: 13px;
    margin-bottom: 15px;
}

.review-block-title {
    font-size: 15px;
    font-weight: 700;
    margin-bottom: 10px;
}

.review-block-description {
    font-size: 13px;
}


.monthly_calender {
    width: 100%;
    max-width: 600px;
    display: inline-block;
}


/*-- Profile widget --*/

.profile-widget .panel-heading {
    min-height: 200px;
    background: #fff url(../img/profile-1024x640.jpg) no-repeat top center;
    background-size: cover;
}

.profile-widget .media-heading {
    color: #5B5147;
}

.profile-widget .panel-body {
    padding: 25px 15px;
}

.profile-widget .panel-body .img-circle {
    height: 90px;
    width: 90px;
    padding: 8px;
    border: 1px solid #e2dfdc;
}

.profile-widget .panel-footer {
    padding: 0px;
    border: none;
}

.profile-widget .panel-footer .btn-group .btn {
    border: none;
    font-size: 1.2em;
    background-color: #F6F1ED;
    color: #BAACA3;
    border-top-left-radius: 0px;
    border-top-right-radius: 0px;
    padding: 15px 0;
}

.profile-widget .panel-footer .btn-group .btn:hover {
    color: #F6F1ED;
    background-color: #8F7F70;
}

.profile-widget .panel-footer .btn-group>.btn:not(:first-child) {
    border-left: 1px solid #fff;
}

.profile-widget .panel-footer .btn-group .highlight {
    color: #E56E4C;
}
      
.whole_profile
{
    margin-top: -5rem;
}                              


#comment
{

    margin-top: 1rem;
    margin-left: 10rem;
}                              

</style>
                 



</head>



<body>

  <?php foreach ($email as $username):

  if ($username == '')
   {
    $this-> load ->view ('tick/partials/nav_bar'); 
   }

   else
   {
    $this-> load ->view ('tick/partials/nav_bar2',$username); 
   }

 endforeach; ?>

<br><br>

<?php $valuer=$this -> input -> get('valuer_id') ?>
<section class="col-md-12 whole_profile">
<div class="row">
    <div class="col-sm-12 col-md-4">
        <div class="card">
            <div class="card-header">
                <div class="card-header-menu">
                    <i class="fa fa-bars"></i>
                </div>
                <div class="card-header-headshot"></div>
            </div>
            <div class="card-content">
                <div class="card-content-member">
                    <h4 class="m-t-0">Mr. R.M.G. Rathnayaka</h4>
                    <p class="m-0"><i class="pe-7s-map-marker"></i>Incorporated Valuer</p>
                </div>
                <div class="card-content-languages">
                    <div class="card-content-languages-group">
                        <div>
                            <h4>Speaks: </h4>
                        </div>
                        <div>
                            <ul>
                                <li>Sinhala
                                    <div class="fluency fluency-4"></div>
                                </li>
                                 <li>English
                                    <div class="fluency fluency-4"></div>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="card-content-languages-group">
                        <div>
                            <h4>Office Address:</h4>
                        </div>
                        <div>
                            <ul>
                                
                                <li>"Wedaniwasa", Dahigamuwa, Kurunegala</li>
                                
                            </ul>
                        </div>
                       
                        
                    </div>
                              <div class="card-content-languages-group">
                  <div>
                            <h4>Reference Number:</h4>
                        </div>
                        <div>
                            <ul>
                                
                                <li>SADB/M/01/002</li>
                                
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="card-content-summary">
                    <p></p>
                </div>
            </div>
            <div class="card-footer">
                <div class="card-footer-stats">
                    <div>
                        <p>PROJECTS:</p><i class="fa fa-users"></i><span>5</span>
                    </div>
                    <div>
                        <p>EXPERIENCE</p><span class="stats-small">1 year</span>
                    </div>
                </div>
                <div class="card-footer-message">
                    <h4><a href="<?php echo base_url()?>index.php/tick/home/view_appoint"><i class="fa fa-comments"></i> Make an appointment</a></h4>
                </div>
            </div>
        </div>
    </div>
    <div id="comment">
<form method="post">
<textarea id="words" rows="5" cols="80" placeholder="Enter comment" name="text_comment"></textarea>
<input type="submit" name="get_comment" value="Comment" style="background-color: green;color:white;"/> <br>
<p id="para"></p>
</form>
</div>

     <div class="col-sm-12 col-md-8 show_ratings">
        <div class="review-block">
             <?php foreach ($comments as $get_comment) { ?>
            <div class="row">
                <div class="col-sm-3">
                    <div class="review-block-img">
                        <img src="https://bootdey.com/img/Content/avatar/avatar6.png" class="img-rounded" alt="">
                    </div>
                   
                    <div class="review-block-name" style="font-size: 0.7em"><a href="#"><?php echo $get_comment -> username; ?></a></div>
                    <div class="review-block-date"><?php echo $get_comment -> date ?><br><?php echo $get_comment -> time; ?></div>
                </div>
                <div class="col-sm-9">
                    <div class="review-block-rate">
                        <button type="button" class="btn btn-success btn-xs" aria-label="Left Align">
                            <span class="glyphicon glyphicon-star" aria-hidden="true"></span>
                        </button>
                        <button type="button" class="btn btn-success btn-xs" aria-label="Left Align">
                            <span class="glyphicon glyphicon-star" aria-hidden="true"></span>
                        </button>
                        <button type="button" class="btn btn-success btn-xs" aria-label="Left Align">
                            <span class="glyphicon glyphicon-star" aria-hidden="true"></span>
                        </button>
                        <button type="button" class="btn btn-default btn-xs" aria-label="Left Align">
                            <span class="glyphicon glyphicon-star" aria-hidden="true"></span>
                        </button>
                        <button type="button" class="btn btn-default btn-xs" aria-label="Left Align">
                            <span class="glyphicon glyphicon-star" aria-hidden="true"></span>
                        </button>
                    </div>
                    <div class="review-block-title">Review about the valuer</div>
                    <div class="review-block-description"><?php echo $get_comment -> comment; ?></div>
                </div>
            </div>
              <hr>
            <?php } ?>
         
      
        </div> 
    </div>

</section>


<!-- <script type="text/javascript">
function getwords() {
  text = words.value;
  document.getElementById("para").innerHTML += '<p>'+text
  document.getElementById("words").value = "enter"
}
</script>
 -->



<?php $this-> load ->view ('tick/partials/footer');  ?> 
</body>

</html>