// CityDetail.vue
import React from 'react';
import CityDetail from './CityDetail';

const CityDetailPage = ({ city, activities, restaurants }) => {
  return (
    <div>
      <CityDetail city={city} activities={activities} restaurants={restaurants} />
    </div>
  );
};

export default CityDetailPage;
