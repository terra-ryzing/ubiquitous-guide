#include < iostream >

  using namespace std;

int main() {
  int arr[10] = {
    2,
    3,
    6,
    9,
    7,
    4,
    1,
    8,
    10,
    5
  };

  int i, n;

  n = 10;

  int holePosition, valueToInsert;

  /* select value to be inserted */
  for (i = 1; i < n; i++) {

    valueToInsert = arr[i];
    holePosition = i;

    /*locate hole position for the element to be inserted */
    while (holePosition > 0 && arr[holePosition - 1] > valueToInsert) {

      arr[holePosition] = arr[holePosition - 1];
      holePosition = holePosition - 1;
    }

    /* insert the number at hole position */

    arr[holePosition] = valueToInsert;
  }

  for (i = 0; i < n; i++) {
    cout << arr[i] << ",";
  }
  return 0;
}
