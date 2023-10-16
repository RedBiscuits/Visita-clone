
    <script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/2.1.0/sweetalert.min.js"></script>

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/css/toastr.min.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/2.0.2/js/toastr.min.js"></script>

    <script type="text/javascript">


        $('body').on('click', '.confirm', function () {


             var form =  $(this).closest("form");

             var name = $(this).data("name");

             event.preventDefault();

             swal({

                 title:  "{{ __('admin.delete_message')}} ",
                 text: "{{ __('admin.delete_text')}} ",
                 icon: "warning",
                 buttons: true,
                 dangerMode: true,
                 buttons: [ "{{ __('admin.cancel')}} ",  "{{ __('admin.delete')}} "],

             })

             .then((willDelete) => {

               if (willDelete) {

                 form.submit();

               }

             });

         });





        $('.block').click(function(event) {

            var form =  $(this).closest("form");

            var name = $(this).data("name");

            event.preventDefault();

            swal({

                title: `هل انت متأكد انك تريد حظر المستخدم`,
                text: " لا يمكن للمستخدم استخدام الملف الشخصي",
                icon: "warning",
                buttons: true,
                dangerMode: true,
                buttons: ["الغاء", "حظر"],

            })

            .then((willDelete) => {

              if (willDelete) {

                form.submit();

              }

            });

        });


        $('.activate').click(function(event) {

            var form =  $(this).closest("form");

            var name = $(this).data("name");

            event.preventDefault();

            swal({

                title: `هل انت متأكد انك تريد تفعيل المستخدم`,
                text: "يمكن للمستخدم استخدام الملف الشخصي",
                icon: "success",
                buttons: true,
                dangerMode: false,
                buttons: ["الغاء", "تفعيل"],

            })

            .then((willDelete) => {

              if (willDelete) {

                form.submit();

              }

            });

        });



    </script>

    @if ($errors->any())

    @foreach ($errors->all() as $error)

        <script>

          toastr.error("{{ $error }}");

        </script>


        @endforeach

    @endif


    @if(session()->has('message'))

    <script>

        toastr.success("{{session()->get('message')}}");

    </script>
    @endif
