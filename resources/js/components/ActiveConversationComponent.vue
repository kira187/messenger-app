<template>
    <b-row class="h-100">
        <b-col cools="8">
            <b-card
                footer-bg-variant="dark"
                footer-border-varianr="dark"
                title="Conversacion activa"
                class="h-100">
                <p class="card-text">Lorem impsun </p>
                <div slot="footer">
                    <b-form class="my-3">
                        <b-form-input class="text-center"
                            type="text"
                            placeholder="Buscar contacto....">            
                        </b-form-input>
                    </b-form>
                </div>            
            </b-card>
        </b-col>
        
        <b-col cols="4">
            <b-img rounded="circle" blank width="60" height="60" blank-color="#777" alt="img" class="m-1" />
            <p> Usuario seleccionado</p>
            <hr>
            <b-form-checkbox>
                Desactivar notificaciones
            </b-form-checkbox>
        </b-col>
    </b-row>                                  
</template>

<script>
    export default {
        mounted() {
            console.log('Component mounted.')
        }
    }
</script>
