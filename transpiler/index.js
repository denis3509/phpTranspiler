const fs = require('fs');
const engine = require('php-parser');
const path = require('path');
const transpiler = () => {
  const parser = new engine({
    // some options :
    parser: {
      extractDoc: true,

    },
    ast: {
      withPositions: true
    }
  });
  const phpFile = fs.readFileSync(path.join(__dirname, 'example.php'));
  const ast = parser.parseCode(phpFile);
  console.log(ast);
};

module.exports = transpiler;