<div class="" style="position: reltive;" >

    <h1>TEST START</h1>
    <header>
    <script>
      var gameInstance = UnityLoader.instantiate("gameContainer", "/unity/Build/Builds.json", {onProgress: UnityProgress});
    </script>
  </header>
  <section>
    <div class="webgl-content">
      <div id="gameContainer" style="width: 960px; height: 600px"></div>
      <div class="footer">
        <div class="webgl-logo"></div>
        <div class="fullscreen" onclick="gameInstance.SetFullscreen(1)"></div>
        <div class="title">Mankind</div>
      </div>
    </div>
  </section>
    <h1>TEST END</h1>
</div>