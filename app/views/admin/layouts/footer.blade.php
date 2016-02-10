</div>
<script>
    var contentPageValid = getElementById('contentPageValid');
    $('contentPageValid').validate({
        rules:{
            alias:required,
            title:required
        },
        messages:{
            alias:'Смотри, что пишешь!!!!',
            title:'Смотри, что пишешь!!!!'
        }
    });
    $(document).ready(function() {
        $('form').validate({
            rules:{
                alias:required,
                title:required
            },
            messages:{
                alias:'Смотри, что пишешь!!!!',
                title:'Смотри, что пишешь!!!!'
            }
        });
    });
</script>
<script src="/evth/admin/js/newadmin.js"></script>
</body>
</html>
