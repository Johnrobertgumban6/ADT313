import logo from './logo.svg';
import './App.css';
import Name from'./component/Name/Name';
import Section from './component/Section/Section';
import Description from './component/Description/Description';

function App() {
  const UserInfo = {
    Name: "John Robert Gumban",
    section: "BSIT-3A",
    description: "Sobrang cute"
  }
return (
<div classname="App">
<Name fullname={UserInfo.Name}/>
<Section section={UserInfo.section}/>
<Description description={UserInfo.description}/>
</div>
)} 

export default App;