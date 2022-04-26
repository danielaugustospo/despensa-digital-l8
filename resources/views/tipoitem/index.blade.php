<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Tipos de Produtos') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                    <form>

                        <label>Nome:</label>
                            <x-input id="tipo" class="block mt-1 w-full"
                                type="text"
                                placeholder="Tipo"
                                name="tipo"
                                required  />
                                <x-button class="mt-3 btn btn-success btn-submit">
                                    {{ __('Salvar') }}
                                </x-button>



                    </form>
                </div>
            </div>
        </div>
    </div>
    <script type="text/javascript">
   
        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        });
       
        $(".btn-submit").click(function(e){
      
            e.preventDefault();
       
            var tipo = $("input[name=tipo]").val();
       
            $.ajax({
               type:'POST',
               url:"{{ route('tipoitem.post') }}",
               data:{tipo:tipo},
               success:function(data){
                  alert(data.success);
               }
            });
      
        });
    </script>
</x-app-layout>
