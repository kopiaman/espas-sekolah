<body>
<script type="text/javascript">
 // Semicolon (;) to ensure closing of earlier scripting
    // Encapsulation
    // $ is assigned to jQuery
    ;(function($) {

         // DOM Ready
        $(function() {

            // Binding a click event
            // From jQuery v.1.7.0 use .on() instead of .bind()
            $('#my-button').bind('click', function(e) {

                // Prevents the default action to be triggered. 
                e.preventDefault();

                // Triggering bPopup when click event is fired
                $('#element_to_pop_up').bPopup({
            contentContainer:'.content',
            loadUrl: 'index2.html' //Uses jQuery.load()
        });
		

            });

        });

    })(jQuery);
</script>

<h3 class="header">5. CONTENT</h3>
				<span class="button small pop2" data-bpopup="{&quot;contentContainer&quot;:&quot;.content&quot;,&quot;loadUrl&quot;:&quot;index2.html&quot;}">Pop it up</span>
                <span class="example">
                    <strong>Example 5a, content: </strong>
                    <em>Simple jQuery popup that loads external html page with ajax. (Ajax popup)<br>
                    <span class="code-string">Be aware that due to browser security restrictions, most "Ajax" requests are subject to the same origin policy; the request can't successfully retrieve data from a different domain, subdomain, or protocol.</span></em>
                </span>
                <pre>        $(<span class="code-string">'element_to_pop_up'</span>).bPopup({
            contentContainer:<span class="code-string">'.content'</span>,
            loadUrl: <span class="code-string">'index2.html'</span><span class="code-comment"> //Uses jQuery.load()</span>
        });
                </pre>

     <!-- Bootstrap core JavaScript -->
     <script src="js/jquery-1.10.2.min.js"></script>
      <script src="js/jquery.bpopup.min.js"></script>
 
</body>
</html>