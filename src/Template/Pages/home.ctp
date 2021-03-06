<md-content layout-padding layout="column" flex class="scroll-y" >
    <?= $this->element('mandatory') ?>

    <section>
        <div layout="row" layout-sm="column" layout-align="center center" layout-wrap>
              <md-button class="md-raised">Button</md-button>
              <md-button class="md-raised md-primary">Primary</md-button>
              <md-button ng-disabled="true" class="md-raised md-primary">Disabled</md-button>
              <md-button class="md-raised md-warn">Warn</md-button>
        </div>
    </section>

     <section flex class="brain-wrapper scroll-y" layout="row" layout-align="center center" layout-wrap>
        <section flex class="brain-layer brain-section forebrain" layout="column" layout-align="center center" layout-wrap>
            <section class="brain-block" >
                <div class="telencephalon" layout="row" layout-align="center center" >
                    <ul class="inline-list justify-content-center">
                        <li><span class="brain-layer list-inline-item lobe lobe-frontal" ></span></li>
                        <li><span class="brain-layer list-inline-item lobe lobe-parietal" ></span></li>
                        <li><span class="brain-layer list-inline-item lobe lobe-occipital" ></span></li>
                        <li><span class="brain-layer list-inline-item lobe lobe-temporal" ></span></li>
                        <li><span class="brain-layer list-inline-item lobe lobe-temporal" ></span></li>
                        <li><span class="brain-layer list-inline-item lobe lobe-temporal" ></span></li>
                        <li><span class="brain-layer list-inline-item lobe lobe-temporal" ></span></li>
                        <li><span class="brain-layer list-inline-item lobe lobe-temporal" ></span></li>
                        <li><span class="brain-layer list-inline-item lobe lobe-temporal" ></span></li>
                        <li><span class="brain-layer list-inline-item lobe lobe-temporal" ></span></li>
                    </ul>
                </div>
                <div class="diencephalon" layout="row" layout-align="center center" >
                    <ul class="inline-list justify-content-center">
                        <li><span class="brain-layer list-inline-item lobe lobe-frontal" ></span></li>
                        <li><span class="brain-layer list-inline-item lobe lobe-parietal" ></span></li>
                        <li><span class="brain-layer list-inline-item lobe lobe-occipital" ></span></li>
                        <li><span class="brain-layer list-inline-item lobe lobe-temporal" ></span></li>
                        <li><span class="brain-layer list-inline-item lobe lobe-temporal" ></span></li>
                        <li><span class="brain-layer list-inline-item lobe lobe-temporal" ></span></li>
                        <li><span class="brain-layer list-inline-item lobe lobe-temporal" ></span></li>
                        <li><span class="brain-layer list-inline-item lobe lobe-temporal" ></span></li>
                        <li><span class="brain-layer list-inline-item lobe lobe-temporal" ></span></li>
                        <li><span class="brain-layer list-inline-item lobe lobe-temporal" ></span></li>
                    </ul>
                </div>
            </section>
            <section flex class="brain-layer brain-section midbrain" layout="row" layout-align="center center" layout-wrap>
                <section flex class="brain-layer brain-section hindbrain" layout="row" layout-align="center center" layout-wrap>
                      <section flex class="brain-layer brain-section" layout="row" layout-align="center center" layout-wrap></section>
                      <section flex class="brain-layer brain-section" layout="row" layout-align="center center" layout-wrap></section>
                 </section>
            </section>

        </section>

         <section flex class="brain-layer brain-section" layout="row" layout-align="center center" layout-wrap>
         </section>
     </section>

    <section>
        <pre><code class="hljs typescript"><span class="hljs-keyword">class</span> MyClass {
          <span class="hljs-keyword">public</span> <span class="hljs-keyword">static</span> myValue: <span class="hljs-built_in">string</span>;
          <span class="hljs-keyword">constructor</span>(<span class="hljs-params">init: <span class="hljs-built_in">string</span></span>) {
            <span class="hljs-keyword">this</span>.myValue = init;
          }
        }
        <span class="hljs-keyword">import</span> fs = <span class="hljs-built_in">require</span>(<span class="hljs-string">"fs"</span>);
        <span class="hljs-keyword">module</span> MyModule {
          <span class="hljs-keyword">export</span> <span class="hljs-keyword">interface</span> MyInterface <span class="hljs-keyword">extends</span> Other {
            myProperty: <span class="hljs-built_in">any</span>;
          }
        }
        <span class="hljs-keyword">declare</span> magicNumber <span class="hljs-built_in">number</span>;
        myArray.forEach(<span class="hljs-function"><span class="hljs-params">()</span> =&gt;</span> { }); <span class="hljs-comment">// fat arrow syntax</span>
        </code></pre>
    </section>

    <section>
        <pre><code class="html">
            addEventListener('load', function() {
              var code = document.querySelector('#code');
              var worker = new Worker('worker.js');
              worker.onmessage = function(event) { code.innerHTML = event.data; }
              worker.postMessage(code.textContent);
            })
        </code></pre>
    </section>
    <section>
        <pre><code class="csharp">
            using System;
            #pragma warning disable 414, 3021
            public class Program
            {
                /// <summary>The entry point to the program.</summary>
                public static int Main(string[] args)
                {
                    Console.WriteLine("Hello, World!");
                    string s = @"This
                    ""string""
                    spans
                    multiple
                    lines!";
                        return 0;
                    }
                }
                async Task<int> AccessTheWebAsync()
                {
                    // ...
                    string urlContents = await getStringTask;
                    return urlContents.Length;
                }
        </code></pre>
    </section>

    <script>
    $(document).ready(function() {
      $('pre code').each(function(i, block) {
        hljs.highlightBlock(block);
      });
    });
    </script>
</md-content>