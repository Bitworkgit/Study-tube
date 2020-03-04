    <template>
        <div>
            <a :href="addr()">
                <div id="caixa">
                    <h2>{{ this.titulo }}</h2>
                    <p>{{ this.desc }}</p>
                </div>
                <video playsinline :src="link()" width="200"></video>
            </a>
            <div id="faixa"></div>
        </div>
    </template>
    
    <script>
        export default {
            props:[
                "url",
                "titulo",
                "desc"
            ],
            methods: {
                link(){
                    return this.url + '#t=0.01';
                },
                addr(){
                    return "/video/play/" + this.titulo;
                }
            }
        }
    </script>

    <style scoped>
        h2 {
            font-family: "Century Gothic";
        }
        p {
            font-family: "Cambria";
            color: grey;
        }
        #caixa{
            width: 50%;
            margin-left: 17%;
        }
        video{
            margin-top: -6%;
        }
        #faixa {
            border: 1px solid grey;
            margin-top:1%;
            width: 30%;
        }
        a {
            text-decoration: none;
            color: black;
        }
    </style>