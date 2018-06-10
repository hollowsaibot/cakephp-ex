<div class="" style="position: reltive;" >
    <?php
     //echo $this->Html->css('/unity/TemplateData/style.css');
     //echo $this->Html->script('/unity/TemplateData/UnityProgress.js');
     //echo $this->Html->script('/unity/Build/UnityLoader.js');
    ?>
    <!--
    <script>
      var gameInstance = UnityLoader.instantiate("gameContainer", "unity/Build/Builds.json", {onProgress: UnityProgress});
    </script>
    -->
    
    <h1>Mankind Proyect Sample</h1>
    <div class="webgl-content">
      <div class="screen" id="gameContainer" style="width: 960px; height: 600px"></div>
      <div class="footer">
        <div class="webgl-logo"></div>
        <div class="fullscreen" onclick="gameInstance.SetFullscreen(1)"></div>
        <div class="title">Mankind</div>
      </div>
    </div>

</div>