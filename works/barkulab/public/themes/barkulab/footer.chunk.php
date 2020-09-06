</div>
</section>
    <!-- Content End -->

    
    
</main> 
<footer class="footer">
    <div class="wrapper">

                <p style="font-size: 13px;font-weight: 500;text-align: justify;">Сайт разработан в рамках проекта «Профессионализация центров образования взрослых в Европе» при поддержке Представительства зарегистрированного общества «DeutscherVolkshochschul-Verbande.V.» (ФРГ) в Республике Беларусь (DVV International) и содействии Федерального министерства экономического сотрудничества и развития Германии (BMZ). Содержание сайта не является официальной позицией ни Представительства зарегистрированного общества «DeutscherVolkshochschul-Verbande.V.» (ФРГ) в Республике Беларусь (DVV International) ни Федерального министерства экономического сотрудничества и развития Германии (BMZ), ни какого-либо лица, действующего от их имени.</p>
                
        <div class="footer__cards"style="margin-top: 20px;">
            
            <div class="footer__card">
                
                <p>© Центр образования взрослых «Баркулаб», 2020</p>
                
            </div>
            <div class="footer__card">
                <p style="text-align: right;"><a target="_blank" href="http://vmv.su"><img title="Graphic design &amp; development by Maxim Vedernik" src="/public/themes/barkulab/img/vmv.png"></a></p>
            </div>

        </div>            
       
    </div>
</footer>
<script src="/public/themes/barkulab/js/lightbox.js"></script>
<script src="/public/themes/barkulab/js/jquery.embedvkgallery.js"></script>
<script src="/public/themes/barkulab/js/scripts.js"></script>


<style>
#hellopreloader>p{
    display:none;
}
#hellopreloader_preload{
    display: block;
    position: fixed;
    z-index: 99999;
    top: 0;
    left: 0;
    width: 100%;
    height: 100%;
    min-width: 1000px;
    background: #352d39 url(<?php echo Site::url(); ?>/img/load.gif) center center no-repeat;background-size:200px;
}
</style>
<div id="hellopreloader">
    <div id="hellopreloader_preload"></div>
</div>
<script type="text/javascript">var hellopreloader = document.getElementById("hellopreloader_preload");function fadeOutnojquery(el){el.style.opacity = 1;var interhellopreloader = setInterval(function(){el.style.opacity = el.style.opacity - 0.05;if (el.style.opacity <=0.05){ clearInterval(interhellopreloader);hellopreloader.style.display = "none";}},16);}window.onload = function(){setTimeout(function(){fadeOutnojquery(hellopreloader);},1000);};</script>
</body>
</html>