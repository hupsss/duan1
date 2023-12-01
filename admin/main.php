<style>
    .char-main{
        display: flex;
        justify-content: center;
        align-items: center;
    }
</style>
<section class="section-index">
    <div class="char-main" >
        <div class="col-md-8">
            <canvas id="myChart"></canvas>
            <div><br><br></div>
            <canvas class="mt-5" id="myChart2"></canvas>
        </div>
    </div>
    
</section>
<script>
    const data1 = [
        <?= $sp['countsp']?>,
        <?= $tk['counttk']?>,
        <?= $bl['countcm']?>,
        <?= $dh['countdh']?> 
        ]

        
</script>