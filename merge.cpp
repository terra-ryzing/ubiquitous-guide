#include < iostream > 
#define max 10
using namespace std;

int a[] = {
  310,
  285,
  179,
  652,
  351,
  861,
  254,
  450,
  520,
  423,
  666
};
int b[11];

void Merge(int low, int mid, int high) {
  int h, i, j;
  h = low;
  i = low;
  j = mid + 1;

  while (h <= mid && j <= high) {

    if (a[h] <= a[j]) {
      b[i] = a[h];
      h = h + 1;
    } else {
      b[i] = a[j];
      j = j + 1;
    }

    i = i + 1;

  }

  if (h > mid) {

    for (int k = j; k <= high; k++) {
      b[i] = a[k];
      i = i + 1;
    }
  } else {

    for (int k = h; k <= mid; k++) {
      b[i] = a[k];
      i = i + 1;
    }

    for (int k = low; k <= high; k++) {
      a[k] = b[k];
    }
  }
}
void MergeSort(int low, int high) {
  int mid;

  if (low < high) {
    mid = (low + high) / 2;
    MergeSort(low, mid);
    MergeSort(mid + 1, high);
    Merge(low, mid, high);
  } else {

    return;

  }
}

int main() {
  int i;

  cout << "\n List before sorting:\n";

  for (i = 0; i <= max; i++) {
    cout << "\n" << a[i];
  }
  MergeSort(0, max);

  cout << "\n After sorting:\n";

  for (i = 0; i <= max; i++) {
    cout << "\n" << a[i];
  }
}


