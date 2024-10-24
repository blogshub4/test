// actions.js
export const resetValue = () => ({
  type: 'RESET_VALUE',
});

export const updateValue = (payload) => ({
  type: 'UPDATE_VALUE',
  payload,
});

/////////////////////////


// reducer.js
const initialState = {
  myValue: '',
};

const myReducer = (state = initialState, action) => {
  switch (action.type) {
    case 'RESET_VALUE':
      return {
        ...state,
        myValue: '',
      };
    case 'UPDATE_VALUE':
      return {
        ...state,
        myValue: action.payload,
      };
    default:
      return state;
  }
};

export default myReducer;


///////////////////////

// First Component (Before Redirect):
import React from 'react';
import { useNavigate } from 'react-router-dom';

const FirstComponent = () => {
  const navigate = useNavigate();

  const handleRedirect = () => {
    // Redirect to the second component
    navigate('/second-component');
  };

  return (
    <button onClick={handleRedirect}>Go to Second Component</button>
  );
};

export default FirstComponent;


// \\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\

import React, { useEffect } from 'react';
import { useDispatch, useSelector } from 'react-redux';
import { resetValue, updateValue } from './store/actions';

const SecondComponent = () => {
  const dispatch = useDispatch();
  const mySelectorValue = useSelector(state => state.myValue);

  // Reset value on the first render after redirect
  useEffect(() => {
    dispatch(resetValue());
  }, [dispatch]);

  // Handle click event to update the value with a payload
  const handleClick = () => {
    const newPayload = 'New Data';
    dispatch(updateValue(newPayload));
  };

  return (
    <div>
      <p>Value: {mySelectorValue}</p>
      <button onClick={handleClick}>Update Value with Payload</button>
    </div>
  );
};

export default SecondComponent;
