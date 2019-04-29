const sameHeight = (() => {
    
	const blockquotes = [...document.querySelectorAll('blockquote')];
    let tallest = 0;
    
 	for(let i = 0; i < blockquotes.length; i++){
		
		let element = blockquotes[i];
		let elementHeight = element.offsetHeight;
		tallest = (elementHeight>tallest ? elementHeight : tallest); 
		
	 }
    for(let i = 0; i < blockquotes.length; i++){
        blockquotes[i].style.height = tallest + "px";
	}



	window.addEventListener('resize', ()=>{
	
		for(let i = 0; i < blockquotes.length; i++){
			
			let element = blockquotes[i];
			element.style.height = '';
			let elementHeight = element.offsetHeight;
			
			console.log(elementHeight);
			tallest = (elementHeight>tallest ? elementHeight : tallest); 
			
			blockquotes[i].style.height = tallest + "px";
			console.log(elementHeight);
		 }
	
	})
})();
 
export default sameHeight; 
