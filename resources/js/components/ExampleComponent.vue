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
                                    <th>age</th>
                                </tr>
                            </thead>
                            <tbody>
                                
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
            console.log('Component mounted hello asd')
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
               axios.get('http://dummy.restapiexample.com/api/v1/employees')
               .then(response => {
                   this.shop = response.data;
               })
               .catch(error => {

               })
           } 
        }
    }
</script>
