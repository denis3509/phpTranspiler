const {BrowserWindow} = require('electron').remote
const path = require('path')
const transpiler = require('../../transpiler')
const newWindowBtn = document.getElementById('new-window')
const myButton = document.getElementById('my-button');
newWindowBtn.addEventListener('click', (event) => {
  const modalPath = path.join('file://', __dirname, '../../sections/windows/modal.html')
  let win = new BrowserWindow({ width: 400, height: 320 })

  win.on('close', () => { win = null })
  win.loadURL(modalPath)
  win.show()
})

myButton.addEventListener('click',(event)=>{
  transpiler();
})