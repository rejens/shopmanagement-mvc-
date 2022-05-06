<?php require_once APPROOT . "/views/includes/includes.php" ?>


<div class="container-fluid">
    <div class="row">
        <!--   pie chart start-->
        <div class="  col-lg-4 col-md-5 ">

            <div class="card bg-light mb-3 ml-0 shadow-lg pie-chart" style="max-width: 20rem; background-color:#F4FCD9; height:30rem;border-radius: 15px; ">
                <div class="card-body text-primary">
                    <canvas id="pieChart" style="max-width: 500px;"></canvas>
                    <br>
                    <!-- <div class="text-dark mt-5">total investment: <?php //  echo $totalInvestment; 
                                                                        ?></div> -->
                </div>
            </div>
        </div>
        <!--   pie chart end-->

        <!--   line chart start-->
        <div class=" col-lg-8 col-md-7 ">
            <div class="card bg-light mb-3 ml-0 shadow-lg line-chart" style="max-width: 45rem; background-color:#F4FCD9; 
        height:30rem;border-radius: 15px; ">
                <div class="card-body text-primary">
                    <canvas id="lineChart" style="max-width: 60rem;max-height: 50rem"></canvas>
                </div>
            </div>
        </div>
        <!--   line chart end-->

    </div>

</div>
</div>

</div>

<?php require_once APPROOT . "/views/includes/footer.php" ?>
?>