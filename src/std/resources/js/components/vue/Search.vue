    <template>
        <div id="barra">
            <img src="https://upload.wikimedia.org/wikipedia/commons/4/4f/Search-button.png" v-on:click="open" width="30">
            <input type="text" name="search" id="search" v-on:keyup.enter="open">
        </div>
    </template>
    
    <script>
        export default {
            methods: {
                open(){
                    var wanted = document.getElementById("search").value;
                    if(wanted == null || wanted == ""){
                        return;
                    }
                    console.log(wanted);
                    window.open('/search/' + wanted);
                }
            }
        }
    </script>

    <style scoped>
        #barra {
            width: 45%;
            height: 35px;
            background-color: white;
            border: 1px solid rgb(73, 158, 255);
            -webkit-box-shadow: 2px 1px 25px 0px rgb(28, 138, 219);
            -moz-box-shadow: 2px 1px 25px 0px rgb(28, 138, 219);
            box-shadow: 2px 1px 25px 0px rgb(28, 138, 219);
        }

        img {
            margin-top: 0.3%;
            margin-right: 1%;
            float: right;
        }

        input {
            width: 90%;
            float: left;
            height: 30px;
            border-top: white;
            border-left: white;
            border-right: white;
            border-bottom: white;

        }

        input:focus{
            outline: none;
        }
    </style>