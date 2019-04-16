<template>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card card-default">
                    <div class="card-header">Example Component</div>

                    <div class="card-body">
                        I'm an example component.
                    </div>
                    <div class="card-body">
                        <table class="table">
                            <thead>
                                <tr>
                                    <th>id</th>
                                    <th>name</th>
                                    <th>address</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr v-for="value in shop">
                                    <td>{{value.id}}</td>
                                    <td>{{value.name}}</td>
                                    <td>{{value.address}}</td>
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
    export default {
        mounted() {
            console.log('Component mounted hello')
        },
        data() {
            return {
                message: 'say hello hhh',
                shop: {}
            }
        },
        created(){
            this.getData()
        },
        methods: {
           getData(){
               axios.get('http://apidev.muabanhay.com/epark/public/api/shop/list?paginate=3')
               .then(response => {
                   this.shop = response.data.data;
               })
               .catch(error => {

               })
           } 
        }
    }
</script>
