const studyMonitor = [
  {
    quatile: 1,
    // eslint-disable-next-line camelcase
    number_of_exams: 4,
    course: [
      { 
        name: 'Program and Career Orientation(PCO)',
        coursecode: 'CU75001V3',
        ects: 2.5,
        exam: [
          {
            number: 1,
            weight: '100%',
            name: 'Assessment website(Individual process assessment)',
            grade: null
          }
        ]
      },
      { 
        name: 'Computer Science Basics(CSB)',
        coursecode: 'CU75002V2',
        ects: 5,
        exam: [
          {
            number: 1,
            weight: '100%',
            name: 'Written knowledge test',
            grade: null
          }
        ]
      },
      { 
        name: 'Programming Basics (PBA)',
        coursecode: 'CU75003V1',
        ects: 5,
        exam: [
          {
            number: 1,
            weight: '100%',
            name: 'Case study exam',
            grade: null
          }
        ]
      },
      { 
        name: 'IT Personality Project Week 1 (PPW1)',
        coursecode: 'CU75004V1',
        ects: 1.25,
        exam: [
          {
            number: 1,
            weight: '100%',
            name: 'Portfolio',
            grade: null
          }
        ]
      }
    ]
  },
  {
    quatile: 2,
    // eslint-disable-next-line camelcase
    number_of_exams: 2,
    course: [
      { 
        name: 'Object-Oriented programming(OOP)',
        coursecode: 'CU75004V1',
        ects: 10,
        exam: [
          {
            number: 1,
            weight: '50%',
            name: 'Presentation',
            grade: null
          },
          {
            number: 2,
            weight: '50%',
            name: 'Case study exam',
            grade: null
          }
        ]
      },
    ]
  },
  {
    quatile: 3,
    // eslint-disable-next-line camelcase
    number_of_exams: 4,
    course: [
      { 
        name: 'Framework Development 1 (FDE1)',
        coursecode: 'CU75008V1',
        ects: 5,
        exam: [
          {
            number: 1,
            weight: '100%',
            name: 'Case study exam',
            grade: null
          }
        ]
      },
      { 
        name: 'Framework Project 1 (FPR1)',
        coursecode: 'CU75009V4',
        ects: 5,
        exam: [
          {
            number: 1,
            weight: '33%',
            name: 'Criterium based interview',
            grade: null
          },
          {
            number: 2,
            weight: '33%',
            name: 'Assignment',
            grade: null
          },
          {
            number: 3,
            weight: '34%',
            name: 'Case study exam',
            grade: null
          }
        ]
      }
    ]
  },
  {
    quatile: 4,
    // eslint-disable-next-line camelcase
    number_of_exams: 6,
    course: [
      { 
        name: 'Framework Project 2 (FPR2)',
        coursecode: 'CU75011',
        ects: 10,
        exam: [
          {
            number: 1,
            weight: '25%',
            name: 'Final delivery',
            grade: null
          },
          {
            number: 2,
            weight: '25%',
            name: 'Report of acceptance tests and optional assesments',
            grade: null
          },
          {
            number: 3,
            weight: '50%',
            name: 'IT Development Portfolio',
            grade: null
          }
        ]
      },
      {
        name: 'IT Personality International week (PIW)',
        coursecode: 'CU75055V1',
        ects: 1.25,
        exam: [
          {
            number: 1,
            weight: '100%',
            name: 'Portfolio',
            grade: null
          }
        ]
      },
      {
        name: 'Personal Professional Development: Exploration (PPD-E) (INT Class)',
        coursecode: 'CU75068V2',
        ects: 12.5,
        exam: [
          {
            number: 1,
            weight: '50%',
            name: 'English test',
            grade: null
          },
          {
            number: 2,
            weight: '50%',
            name: 'Criterium focused interview',
            grade: null
          }
        ]
      }
    ]
  }
];

createDashboard(document.getElementById('table'));
// tableElement is supposed to be an table element.

/**
 *
 */
function createDashboard(tableElement) {
  const theadElement = document.createElement('thead');
  tableElement.appendChild(theadElement);
  tableElement.firstElementChild.innerHTML = `
  <tr>
      <th> Quartile </th>
      <th> Course code </th>
      <th> Course name </th>
      <th> ECTS </th>
      <th> Exam </th>
      <th> Weight </th>
      <th> Exam name </th>
      <th> Grade </th>
  </tr>
  `;
  let tbodyElement = document.createElement('tbody');
  tableElement.appendChild(tbodyElement);
  tbodyElement = tableElement.lastElementChild;
  studyMonitor.forEach(function (quartile) {
    quartile.course.forEach(function (course,courseIndex) {
      course.exam.forEach(function (exam,examIndex) {
        if(courseIndex == 0 && examIndex == 0){ // Use this template in case in this course you have oonly one exam
          tbodyElement.innerHTML += `<tr><td rowspan="${quartile.number_of_exams}">${quartile.quatile}</td><td rowspan="${course.exam.length}">${course.coursecode}</td><td rowspan="${course.exam.length}">${course.name}</td><td rowspan="${course.exam.length}">${course.ects}</td><td>${exam.number}</td><td>${exam.weight}</td><td>${exam.name}</td><td><input type="number" min="0" max="10" value="${exam.grade}"/></td></tr>`;
        }
        else{
          if(examIndex == 0){ // Use this template in case it is first exam in this course
            tbodyElement.innerHTML += `<tr><td rowspan="${course.exam.length}">${course.coursecode}</td><td rowspan="${course.exam.length}"   >${course.name}</td><td rowspan="${course.exam.length}">${course.ects}</td><td>${exam.number}</td><td>${exam.weight}</td><td>${exam.name}</td><td><input type="number" min="0" max="10" value="${exam.grade}"/></td></tr>`;
          }
          else{ // Use this when it is next exam in this course
            tbodyElement.innerHTML += `<tr><td>${exam.number}</td><td>${exam.weight}</td><td>${exam.name}</td><td><input type="number" min="0" max="10" value="${exam.grade}"/></td></tr>`;
          }
        }
      });
    });
  });
}