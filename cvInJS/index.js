window.onload = function(){
    document.getElementById("downloadbtn").addEventListener("click",()=>{
        const invoice = this.document.getElementById("invoice");
        console.log(invoice);
        console.log(window);
        html2pdf().from(invoice).save();
    })
    const element = document.getElementById("invoice");
    html2pdf()
    .from(element)
    .save();
}