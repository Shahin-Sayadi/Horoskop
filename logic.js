window.addEventListener("load",initsite)
document.getElementById("saveBtn").addEventListener("click", setHoroscope)
document.getElementById("updateBtn").addEventListener("click", updateHoroscope)
document.getElementById("deleteBtn").addEventListener("click", deleteHoroscope)


function initsite(){

    viewHoroscope()
}


async function setHoroscope(){
    let dateToSave = document.getElementById("dateInput").value
    let month = dateToSave[5]+dateToSave[6]
    let day = dateToSave[8]+dateToSave[9]
    
    
    if(!dateToSave.length) {
        
        return
    }
    
    const body = new FormData()
    
    body.set("day", day)
    body.set("month", month)
    
    const collectedName = await makeRequest("./server/addHoroscope.php" , "POST",body)
    console.log(collectedName)
    
    viewHoroscope()

    
    
    
    
}

async function viewHoroscope(){
    const nameText = document.getElementById("nameText")
    
    const collectedName = await makeRequest("./server/viewHoroscope.php" , "GET")
    
    if(collectedName){
        nameText.innerText = collectedName
    }else{
        nameText.innerText = "Finns inget horoskop sparat!"
    }

        
}

async function deleteHoroscope(){
    
    const collectedName = await makeRequest("./server/deleteHoroscope.php" , "DELETE")
    
    
    console.log(collectedName)
    viewHoroscope()
    

}

async function updateHoroscope(){
    let dateToSave = document.getElementById("dateInput").value
    let month = dateToSave[5]+dateToSave[6]
    let day = dateToSave[8]+dateToSave[9]
    
    if(!dateToSave.length) {
        
        return
    }
    
    const body = new FormData()
    
    body.set("day", day)
    body.set("month", month)
    
    const collectedName = await makeRequest("./server/updateHoroscope.php" , "POST",body)
    console.log(collectedName)
    
    viewHoroscope()
    
    
}
    



async function makeRequest(path, method, body){
    try {    
        const response = await fetch(path, {
            method,
            body
 
        })
        
        return response.json()
    }catch(err){
        console.error(err)
    }

}
    
