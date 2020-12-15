window.addEventListener("load",initsite)
document.getElementById("saveBtn").addEventListener("click", setName)
document.getElementById("getBtn").addEventListener("click", getName)


function initsite(){

}

async function setName(){
    const nameToSave = document.getElementById("nameInput").value
    
    if(!nameToSave.length) {
        console.log("du måste skriva in något namn")
        return
    }
    
    const body = new FormData()
    body.set("name",nameToSave)
    
    const collectedName = await makeRequest("./server/addHoroscope.php" , "POST",body)
    console.log(collectedName)
    
    
}

async function getName(){
    const nameText = document.getElementById("nameText")
    
    const collectedName = await makeRequest("./server/viewHoroscope.php" , "GET")
    nameText.innerText = collectedName

}





async function makeRequest(path, method, body){
    try {    
        const response = await fetch(path, {
            method,
            body
 
        })
        console.log(response)
        return response.json()
    }catch(err){
        console.error(err)
    }

}
    
