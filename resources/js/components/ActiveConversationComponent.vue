<template>
    <b-row class="h-100">
        <b-col cools="8">
            <b-card
                footer-bg-variant="light"
                footer-border-varianr="dark"
                title="Conversacion activa"
                class="h-100">
                
                <b-media vertical-align="center" class="mb-2">
                    <template v-slot:aside>
                        <b-img rounded="circle" blank blank-color="#ccc" width="48" alt="placeholder"></b-img>                        
                    </template>                    
                    <b-card>
                        Cras sit amet nibh libero, in gravida nulla. Nulla vel metus scelerisque ante sollicitudin.                    
                    </b-card>                                            
                </b-media>

                <b-media right-align vertical-align="center" class="mb-2">
                    <template v-slot:aside>
                        <b-img rounded="circle" blank blank-color="#ccc" width="48" alt="placeholder"></b-img>
                    </template>                    
                    <b-card>
                    Cras sit amet nibh libero, in gravida nulla. Nulla vel metus scelerisque ante sollicitudin.                    
                    </b-card>
                </b-media>

                <div slot="footer">
                    <b-form class="mb-0">
                        <b-input-group>
                            <b-form-input class="text-center"
                                type="text"
                                placeholder="Escribe un mensaje">
                            </b-form-input>

                            <b-input-group-append>
                                <b-button variant="primary">Enviar</b-button>
                            </b-input-group-append>
                        </b-input-group>
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
