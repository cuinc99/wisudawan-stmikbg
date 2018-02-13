<script
        src="https://code.jquery.com/jquery-3.2.1.js"
        integrity="sha256-DZAnKJ/6XZ9si04Hgrsxu/8s717jcIzLy3oi35EouyE="
        crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/flatpickr"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/js/toastr.min.js"></script>

{!! Toastr::render() !!}
<script>
    $(".tanggal_lahir").flatpickr({
        altInput: true,
        maxDate: 'today',
        defaultDate: "1995-01-01"
    });

    $(".tanggal_lahir_edit").flatpickr({
        altInput: true,
        maxDate: 'today'
    });

    function setTwoNumberDecimal(event) {
        this.value = parseFloat(this.value).toFixed(2);
    }
</script>