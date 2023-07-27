import { TestBed } from '@angular/core/testing';

import { CrudCitaService } from './crud-cita.service';

describe('CrudCitaService', () => {
  let service: CrudCitaService;

  beforeEach(() => {
    TestBed.configureTestingModule({});
    service = TestBed.inject(CrudCitaService);
  });

  it('should be created', () => {
    expect(service).toBeTruthy();
  });
});
