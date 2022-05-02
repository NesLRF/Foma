<template>
<div class="col-md-12">
        <div class="card-header">
            Lista de usuarios
            <button class="btn btn-success btn-sm" type="button">Crear</button>
        </div>
            <div class="card-body">
                <div class="tile">
                <div class="tile-body">
                    <div class="table-responsive">
                        <table class="table table-hover table-bordered" id="sampleTable">
                            <thead>
                                <tr>
                                    <th>Id</th>
                                    <th>Nombre</th>
                                    <th>Email</th>
                                    <th>Fecha</th>
                                    <th>Acciones</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr v-for= "user in users">
                                    <td>{{user.id}}</td>
                                    <td>{{user.name}}</td>
                                    <td>{{user.email}}</td>
                                    <td>{{user.created_at}}</td>

                                    <td>
                                    <button class="btn btn-info btn-sm" type="button">Detalles</button>
                                    <button class="btn btn-primary btn-sm" type="button">Editar</button>
                                    <button class="btn btn-danger btn-sm" type="button">Eliminar</button>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>  
            </div>
</div>
</template>

<script>
    import datatable from 'datatables.net-bs4'
    require( 'datatables.net-buttons/js/dataTables.buttons' )
    require( 'datatables.net-buttons/js/buttons.html5' )
    import print from 'datatables.net-buttons/js/buttons.print'
    import jszip from 'jszip/dist/jszip'
    import pdfMake from "pdfmake/build/pdfmake"
    import pdfFonts from "pdfmake/build/vfs_fonts"

    export default {
        mounted() {
            this.getUsers()

        },
        data(){
            return{
                users: []
            } 
        },
        methods:{

            tabla(){
                this.$nextTick(() => {
                  $('#sampleTable').DataTable({
                    dom: 'Bfrtip',
                    buttons: [
                    'copy', 'excel', 'pdf'
                    ]
                  });
                });
            },

            getUsers(){
                var urlUsers= "users";
                axios.get(urlUsers).then(response=>{
                    this.users = response.data
                    this.tabla()
                });
            },
        }
    }
</script>
