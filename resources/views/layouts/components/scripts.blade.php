<script src="{{ asset('frontEnd') }}/scripts/vendor.js"></script>
<script src="{{ asset('frontEnd') }}/scripts/plugins.js"></script>
<script src="{{ asset('frontEnd') }}/scripts/main.js"></script>
<script src="{{ asset('src') }}/components.js"></script>
<script>
    @if($errors->any())
        window.onload = () => {
            if (document.getElementsByClassName("contact-modal")[0]) {
                document.getElementsByClassName("contact-modal")[0].click()
            }
        };
    @endif
    @if (session()->has('ok'))
        window.onload = () => {
            if (document.getElementById("success-modal")) {
                document.getElementById("success-modal").click()
            }
        };
    @endif
</script>