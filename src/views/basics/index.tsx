
import { FC } from "react";
import { SendTransaction } from '../../components/SendTransaction';
import Button from 'react-bootstrap/Button';
import Card from 'react-bootstrap/Card';

export const BasicsView: FC = ({ }) => {

  return (
    <div className="md:hero mx-auto p-4">
      <div className="md:hero-content flex flex-col">
        <h1 className="text-center text-5xl font-bold text-transparent bg-clip-text bg-gradient-to-br from-indigo-500 to-fuchsia-500 mt-10 mb-8">
          Market
          </h1>
         <Card style={{ width: '18rem', borderInlineColor: 'white' }}>
          <Card.Img variant="top" src="holder.js/150px180" />
          <Card.Body >
           <Card.Title>Card Title</Card.Title>
           <Card.Text>
            Some quick example text to build on the card title and make up the
            bulk of the card's content.
           </Card.Text>
           <Button variant="primary">Go somewhere</Button>
          </Card.Body>
         </Card>
         
          
       
        {/* CONTENT GOES HERE */}
        <div className="text-center">
          <SendTransaction />
        </div>
      </div>
    </div>
  );
};
