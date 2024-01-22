<?php 
if($this->session->userdata('email')){
?>
<!-- เนื้อหา -->
<br>
<div class="container text-center top-content mt-5 pt-3">
    <b class="text1">Welcome to the Care Bear website.</b>
    <p class="text">Website collecting Care Bear dolls.</p>

    <!-- row1 -->
<br>
<div class="row">
    <div class="col-md-4 top-1">
        <div class="card shadow-sm">
            <div class="card-body mt-3">
                <img src="/assets/img/Bedtime Bear.jpg" alt="" style="width: 100px; border-radius: 5px;">
                <div class="text-center mt-2">
                    <b>Bedtime Bear</b>
                    <p class="mt-2">It's a bear that likes to sleep. Until there was no time to wake up and rest. He is sleepy all the time.</p>
                </div>
            </div>
        </div>
    </div>

    <div class="col-md-4 top-1">
        <div class="card shadow-sm">
            <div class="card-body mt-3">
                <img src="/assets/img/Funshine Bear.jpg" alt="" style="width: 100px; border-radius: 5px;">
                <div class="text-center mt-2">
                    <b>Funshine Bear</b>
                    <p class="mt-2">Optimistic, funny, cheerful, has many friends, he is determined and energetic Be determined and confident in yourself.</p>
                </div>
            </div>
        </div>
    </div>

    <div class="col-md-4 top-1">
        <div class="card shadow-sm">
            <div class="card-body mt-3">
                <img src="/assets/img/Love A Lot Bear.jpg" alt="" style="width: 100px; border-radius: 5px;">
                <div class="text-center mt-2">
                    <b>Love A Lot Bear</b>
                    <p class="mt-2">He is a generous, enthusiastic person, good at expressing his love, cute and kind She has love all around her. She is a smart bear.</p>
                </div>
            </div>
        </div>
    </div>

</div>

<!-- row2 -->
<div class="row mt-3">
    <div class="col-md-4">
        <div class="card shadow-sm">
            <div class="card-body mt-3">
                <img src="/assets/img/Tenderheart Bear.jpg" alt="" style="width: 100px; border-radius: 5px;">
                <div class="text-center mt-2">
                    <b>Tenderheart Bear</b>
                    <p class="mt-2">Have leadership Solve problems for everyone sincerely Straightforward personality and methodical</p>
                </div>
            </div>
        </div>
    </div>

    <div class="col-md-4 top-1">
        <div class="card shadow-sm">
            <div class="card-body mt-3">
                <img src="/assets/img/Grumpy Bear.jpg" alt="" style="width: 100px; border-radius: 5px;">
                <div class="text-center mt-2">
                    <b>Grumpy Bear</b>
                    <p class="mt-2">Frankly, he is easily irritated but recovers quickly. He is solemn and somewhat irritable He is also a brilliant inventor.</p>
                </div>
            </div>
        </div>
    </div>

    <div class="col-md-4 top-1">
        <div class="card shadow-sm">
            <div class="card-body mt-3">
                <img src="/assets/img/Good Luck Bear.jpg" alt="" style="width: 100px; border-radius: 5px;">
                    <div class="text-center mt-2">
                        <b>Good Luck Bear</b>
                        <p class="mt-2">Always lucky, confident, likes to help and encourage others Plus he also gives good luck to his friends.</p>
                    </div>
                </div>
            </div>
        </div>

    </div>
</div>

<div class="container text-center  pt-5">
    <b class="text1">Activity Coloring</b>
</div>

    <!-- row1 -->
<div class="coloring"> 
<div class="container text-center pt-5"> 
    <div class="row mt-5">
        <div class="col-md-3">
            <div class="gallery">
                <a target="_blank" href="img_5terre.jpg">
                    <img src="/assets/img/coloring1.jpg" style="width: 229px; height: 197px;">
                </a>
            </div>
        </div>
    
        <div class="col-md-3 top-2">
            <div class="gallery">
                <a target="_blank" href="img_5terre.jpg">
                    <img src="/assets/img/coloring2.jpg" style="width: 229px; height: 197px;">
                </a>
            </div>
        </div>
    
        <div class="col-md-3 top-2">
            <div class="gallery">
                <a target="_blank" href="img_5terre.jpg">
                    <img src="/assets/img/coloring3.jpg" style="width: 229px; height: 197px;">
                </a>
            </div>
        </div>
    
        <div class="col-md-3 top-2">
            <div class="gallery">
                <a target="_blank" href="img_5terre.jpg">
                    <img src="/assets/img/coloring4.jpg" style="width: 229px; height: 197px;">
                </a>
            </div>
        </div>
    </div>
    
    <!-- row2 -->
    <div class="row mt-5">
        <div class="col-md-3">
            <div class="gallery">
                <a target="_blank" href="img_5terre.jpg">
                    <img src="/assets/img/coloring5.jpg" style="width: 229px; height: 197px;">
                </a>
            </div>
        </div>
    
        <div class="col-md-3 top-2">
            <div class="gallery">
                <a target="_blank" href="img_5terre.jpg">
                    <img src="/assets/img/coloring6.jpg" style="width: 229px; height: 197px;">
                </a>
            </div>
        </div>
    
        <div class="col-md-3 top-2">
            <div class="gallery">
                <a target="_blank" href="img_5terre.jpg">
                    <img src="/assets/img/coloring7.jpg" style="width: 229px; height: 197px;">
                </a>
            </div>
        </div>
    
        <div class="col-md-3 top-2">
            <div class="gallery">
                <a target="_blank" href="img_5terre.jpg">
                    <img src="/assets/img/coloring8.jpg" style="width: 229px; height: 197px;">
                    </a>
                </div>
            </div>
        </div>
    </div>
</div>   
<?php 
    }else{
?>
<div class="pt-5">
<div class="pt-5">
    <div class="container-fluid pt-5">
        <div class="d-flex justify-content-center row">
            <div class="d-flex justify-content-center col-md-3">
                <img class="img-content" src="assets/img/bear.jpg" alt="">
            </div>
            <div class="col-md-5">
                <b class="font1-content">Welcome to the Care Bear website.</b>
                <p class="font2-content">A website about all the Care Bears dolls. Captures the heartwarming moments of baby: sunlit naps, cuddles and story time. Featuring snuggly apparel, delightful essentials and developmental toys, Care Bears Baby will create magical memories for years to come.</p>
            </div>
        </div>
    </div>
</div>
</div>
<?php 
    }
?>
