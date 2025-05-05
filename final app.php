<style>
    #javi{
        background-color: black;
        height: 100%;
        width: 100%;
        position: absolute;
        top: 0px;
        left: 0px;
        opacity: 0.8;
        display: none;
        z-index: 1;
        


        

    }
    #shakil{
        background-color: rgb(107, 20, 20);
        color: white;
        height: 30%;
        width: 30%;
        position: absolute;
        top: 20%;
        
        left: 40%;
        
        display: none;
        z-index: 2;
        
        border-radius: 10px;


    }
    #shakil button{
        border-radius: 10px;
        background-color: black;
        color: white;
    }
    #naveeth{
        background-color: olive;
        color: white;
        margin-left: 40%;
        
        
        
        width: 30%;
        
        border-radius: 10px;
        position: absolute;
        top: 12%;
    }
    #hello{
        background-color: yellowgreen;
        border-radius: 60%;
        margin-top: 20%;
        margin-left: 95%;
        font-size: xx-large;
        position: absolute;
        top: 40%;
        
        

    }
    #raj{
        background-color: rosybrown;
        color: white;
        text-align: center;
    }
    #naveeth button{
        background-color: red;
        color: white;
        margin-left: 10px;
    }
    #nope{
        background-color: olive;
        color: white;
        position: absolute;
        top: 45%;
        display: block;
        
        
        width: 30%;
        margin-left: 40%;
        margin-top: 0px;
        border-radius: 10px;
        
    }
    #jana{
        background: red;
        color: white;
        position: absolute;
        top: 90%;
        margin-left: 10px;
        
        
    }
    #naveeth h2{
        color: rgb(107, 20, 20);
    }
    #hanif{
        background-color: goldenrod;
        height: 93%;
        width: 100%;
        opacity: 0.5;
    }

    
    


</style>
<div id="tahir">

<div id="javi"></div>
    <div id="raj"><h1>booksky</h1></div>
    <div id="hanif"></div>
    
    <div id="naveeth">
        <h2>Rich dad poor dad</h2>
        <h5>Robert</h5>
        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Beatae tempora est inventore doloremque at, cum accusamus blanditiis similique perspiciatis non. Eum architecto accusamus, itaque dolorem eligendi temporibus voluptatibus sequi ex.</p>
        <button onclick="normal(event)">delete</button>
    </div>
    
    <div id="nope"></div>
    <div id="shakil">
        <form>
            <input type="text" placeholder="Book Title" id="box">
            <input type="text" placeholder="Book Author" id="input">
            <textarea placeholder="short discription" id="bot"></textarea>
            
        </form>
        <button onclick="add()">add</button>
        <button onclick="del()">delete</button>
    </div>

<button onclick="change()" id="hello">+</button>
</div>

<script>
    var javith=document.getElementById("javi")
    var shakil=document.getElementById("shakil")
    var box=document.getElementById("box")
    var input=document.getElementById("input")
    function change()
    {
        javith.style.display="block"
        shakil.style.display="block"

    }
    function del()
    {
        event.target.parentElement.remove()
        javith.style.display="none"

    }
    function normal(event)
    {
        naveeth.style.display="none"
    }
    function add()
    {
        nope.style.height="30%"
        shakil.style.position="absolute"
        shakil.style.top="20%"
        
        
        javith.style.display="none"
        shakil.style.display="none"
        
        var h1=document.createElement("h2")
        h1.textContent=box.value
        nope.append(h1)
        
        var h5=document.createElement("h5")
        h5.textContent=input.value
        nope.append(h5)
        var p=document.createElement("p")
        p.textContent=bot.value
        nope.append(p)
        var h4=document.createElement("h4")
        h4.innerHTML="<button onclick='done(event)' id='jana'>delete</button>"
        nope.append(h4)
        h1.style.color="rgb(107, 20, 20)"
        
        
        
        
        

        



        
    }
    function touch()
    {
        event.target.parentElement.remove()
        
    }
    function done(event){
        nope.style.display="none"
        
    }


</script>
