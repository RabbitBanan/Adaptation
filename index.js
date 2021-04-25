
//import chat from './img/chat.png';


// Окно чата
class Chat extends React.Component {
  constructor(props) {
    super(props)
    this.state = { items: [], type: '', text: ''};
    this.handleChange = this.handleChange.bind(this);
    this.handleSubmit = this.handleSubmit.bind(this);
  }

  render() {
    return (
        <div className="chat-box" id="chat" >
          <div className="header-chat-box">
            <img src="img/test3.webp" alt=""/>
            <p>Кролик - Олег</p>
          </div>
          <MessageList
            items={this.state.items} />
          <form
            onSubmit={this.handleSubmit}
            className="input-chat-box">
            <input
              onChange={this.handleChange}
              value={this.state.text}
              placeholder="Написать сообщение..."
              type="text" />
            <button>
              <img src="img/input-button.png" alt="" />
            </button>
          </form>
        </div>
    );
  }

  handleChange(e) {
    this.setState({ text: e.target.value });
  }

  handleSubmit(e) {
    e.preventDefault();
    if (this.state.text.length === 0) {
      return;
    }
    const newMessageUser = {
      text: this.state.text,
      type: 'Цимбалюк Богдан',
      id: Date.now()
    };
    const newMessageBot= {
      text: 'Привет',
      type: 'Олег',
      id: Date.now()
    };
    this.setState(state => ({
      items: state.items.concat(newMessageUser),
      text: ''
    }));
    this.setState(state => ({
      items: state.items.concat(newMessageBot),
      text: ''
    }));
  }
}

// Сообщенния
class MessageList extends React.Component {
  render() {
    //map
    return (
      <div className="connect-chat-box">
        {this.props.items.map(item => (
          <div className="message-box message-bot">
            <span>{item.type}</span>
            <p>{item.text}</p>
          </div>

        ))}
      </div>
    )
  }
}


// Титульник чата
/*class Title extends React.Component {
  render() {
    return (
      <div className="header-chat-box">
        <img src="test3.webp" alt=""></img>
        <p>Кролик - Олег</p>
      </div>
    )
  }
}



class Message extends React.Component {
  render() {
    return (
      <div className="message-box message-bot">
        <div className="message">

          <span>{item.text}</span>

        </div>
      </div>
    )
  }
}

class MessageHuman extends React.Component {
  render() {
    return (
      <div className="message-box message-bot">
        <div className="message">
          <p className="autor">Богдан Цимбалюк</p>
          <span>Прикольно</span>

        </div>
      </div>
    )
  }
}

class MessageBot extends React.Component {
  render() {
    return (
      <div className="message-box message-user">
        <div className="message">
          <p className="autor">Кролик - Олег</p>
          <span>Здраствуйте Богдан Цимбалюк.</span>
          <span>Приветствую вас на портале адаптации "Сase-in". Вы получили достижение: Первый вход.</span>
        </div>
      </div>
    )
  }
}

// Отправка сообщения
class SendMessageForm extends React.Component {
  constructor() {
    super()
    this.state = {
      message: ''
    }
    this.handleChange = this.handleChange.bind(this)
    this.handleSubmit = this.handleSubmit.bind(this)
  }

  handleChange(e) {
    this.setState({
      message: e.target.value
    })
  }

  handleSubmit(e) {
    e.preventDefault()
    this.props.sendMessage(this.state.message)
    this.setState({
      message: ''
    })
  }

  render() {
    return (
      <form
        onSubmit={this.handleSubmit}
        className="input-chat-box">
        <input
          onChange={this.handleChange}
          value={this.state.message}
          placeholder="Написать сообщение..."
          type="text" />
        <button>
          <img src="input-button.png" alt="" ></img>
        </button>
      </form>
    )
  }
}
*/





ReactDOM.render(
  <div class="chat"><img src="img\chat.png"/><Chat /></div>,
  document.getElementById('root')
);
