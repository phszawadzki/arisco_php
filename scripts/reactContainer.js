
                                                //like button
//'use strict';
//
//const e = React.createElement;
//
//class LikeButton extends React.Component {
//  constructor(props) {
//    super(props);
//    this.state = { liked: false };
//  }
//
//  render() {
//    if (this.state.liked) {
//      return 'You liked this.';
//    }
//
//    return e(
//      'button',
//      { onClick: () => this.setState({ liked: true }) },
//      'Like'
//    );
//  }
//}
//
//const domContainer = document.querySelector('#root');
//ReactDOM.render(e(LikeButton), domContainer);

                                                 //like button KONIEC

                                                //second navbar

//const wybrany = "wybrano";
//
//const secondNavbar = (
//    <div id="box" className="mb-2">
//        <select id="drugi-navbar-dropdown">
//            <option value="{wybrany}">{wybrany}</option>
//            <option value="wszystkie">Wszystkie</option>
//            <option value="administracja">Pakiet Administracja</option>
//            <option value="ochronaSrodowiska">Pakiet Ochrona Środowiska</option>
//            <option value="obiegDokumentow">Pakiet Obieg Dokumentów</option>
//            <option value="oprogramowanieDedykowane">Oprogramowanie Dedykowane</option>
//            <option value="stronyInternetowe">Tworzenie Stron Internetowych</option>        
//        </select>
//
//        <a className="minibutton" href="index.html" onClick="">Wszystkie</a>
//        <a className="minibutton1"  href="index.html" onClick="">Pakiet Administracja</a>
//        <a className="minibutton1" href="index.html" onClick="">Pakiet Ochrona Środowiska</a> 
//        <a className="minibutton1" href="index.html" onClick="">Pakiet Obieg Dokumentów</a>
//        <a className="minibutton1" href="index.html" onClick="">Oprogramowanie Dedykowane</a>
//        <a className="minibutton1" href="index.html" onClick="">Tworzenie Stron Internetowych</a>   
//
//        <div className="dropdown">
//          <button onclick={myFunction} className="dropbtn">Zamów</button>
//          <div id="myDropdown" className="dropdown-content my-dropdown-item">
//            <div>Elżbieta Wiśniewska</div>
//              <div>426480325</div>
//              <div>elzbieta.wisniewska@arisco.pl</div>
//              <div>gg: 40095607</div>        
//          </div>
//        </div>    
//    </div>
//);
//
//ReactDOM.render(
//    
//  secondNavbar,
//  document.getElementById('root')
//);


                                                    //second navbar KONIEC

                                                    //AZAM PROGRAMY




//function Section(props) {
//    
//  var programSectionStyle = {
//    display: 'flex'
//  };
//    
//  return (
//  <div className="col-lg-4 col-sm-6 program-container">						
//    <center>
//        <div className="program-section" style={programSectionStyle}>
//            <div className="program-height my-auto">
//                <div className="row">
//                    <div className="col-md-12 col-sm-12 col-3 my-auto">
//                        <img className="program-img img-fluid" src={props.imgUrl}  alt="AZAM - program służący do zarządzania zamówieniami publicznymi" title="AZAM - program służący do zarządzania zamówieniami publicznymi"/>
//                    </div>
//                    <text className="wiecej">Więcej</text>
//                    <div className="col-md-12 col-sm-12 col-9 my-auto"> 
//                        <div className="program-desc">
//                            {props.desc}
//                        </div>
//                    </div>
//                </div>
//            </div>
//        </div>
//    </center>
//  </div>
//  
//  );
//}
//
//
//
//
//function App() {  
//    
//  var containerStyle = {
//    width: '900px',
//    padding: '0px'
//  };
//  var columnStyle = {
//    padding: '0px'
//  };
//    
//  return (
//    <div id="rowContainer" className="row pt-3 mb-5">
//        <div className="container" style={containerStyle}>
//            <div className="col-md-12 col-sm-12" style={columnStyle}>
//                <div id="programy" className="row mt-3">
//                  <Section imgUrl="imgs/zalacznik_7550.jpg" desc="AZAM - program służący do zarządzania zamówieniami publicznymi" />
//                  <Section imgUrl="imgs/zalacznik_7550.jpg" desc="GOMiG Wycinka Drzew GOMiG Wycinka Drzew" />
//                  <Section imgUrl="imgs/zalacznik_7550.jpg" desc="Moduł Bankowy dla programu FK - Finansowo-Księgowy" />
//                </div>
//            </div>
//        </div>
//    </div>
//  );
//}
//
//ReactDOM.render(
//  <App />,
//  document.getElementById('root')
//);

                                                    //AZAM PROGRAMY KONIEC//

                                                    // dzialajacy dropdown //

class Dropdown extends React.Component {
  state = {
    isOpen: false
  };

  toggleOpen = () => this.setState({ isOpen: !this.state.isOpen });

  render() {
    const menuClass = `dropdown-menu${this.state.isOpen ? " show" : ""}`;
    return (
      <div className="dropdown" onClick={this.toggleOpen}>
        <button
          className="btn btn-secondary dropdown-toggle"
          type="button"
          id="dropdownMenuButton"
          data-toggle="dropdown"
          aria-haspopup="true"
        >
          Dropdown
        </button>
        <div className={menuClass} aria-labelledby="dropdownMenuButton">
          <a className="dropdown-item" href="#nogo">
            Item 1
          </a>
          <a className="dropdown-item" href="#nogo">
            Item 2
          </a>
          <a className="dropdown-item" href="#nogo">
            Item 3
          </a>
        </div>
      </div>
    );
  }
}

ReactDOM.render(<Dropdown />, document.getElementById("root"));

                                                    // dzialajacy dropdown KONIEC //