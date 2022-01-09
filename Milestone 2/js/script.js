var app = new Vue({
  el: '#app',
  data: {
    list: [],
  },

  mounted(){
     
     this.publishList()

  },
    
  methods:{

     publishList(){

        axios.get('http://localhost:8888/php-ajax-dischi/Milestone%202/cds.json')
        .then(response => {

           this.list = response.data;

        })
        .catch(error => {
           console.log(error)
        });
     }
       
  }
})