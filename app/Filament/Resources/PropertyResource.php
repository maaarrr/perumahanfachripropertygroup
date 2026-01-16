<?php

namespace App\Filament\Resources;

use App\Filament\Resources\PropertyResource\Pages;
use App\Models\Property;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;

class PropertyResource extends Resource
{
    protected static ?string $model = Property::class;

    protected static ?string $navigationIcon = 'heroicon-o-building-office-2';
    
    protected static ?string $navigationLabel = 'Perumahan';
    
    protected static ?string $pluralLabel = 'Perumahan';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\Section::make('Informasi Dasar')
                    ->schema([
                        Forms\Components\TextInput::make('name')
                            ->label('Nama Perumahan')
                            ->required()
                            ->maxLength(255)
                            ->placeholder('Contoh: D\'Fanisa Residence'),
                        
                        Forms\Components\TextInput::make('location')
                            ->label('Lokasi/Alamat')
                            ->required()
                            ->maxLength(255)
                            ->placeholder('Contoh: Jl. Karya - Pal IX'),
                        
                        Forms\Components\TextInput::make('type')
                            ->label('Tipe')
                            ->required()
                            ->maxLength(255)
                            ->placeholder('Contoh: TIPE 50 CLUSTER'),
                        
                        Forms\Components\TextInput::make('total_units')
                            ->label('Total Unit')
                            ->required()
                            ->maxLength(255)
                            ->placeholder('Contoh: TOTAL 147 UNIT'),
                    ])->columns(2),

                Forms\Components\Section::make('Kontak WhatsApp')
                    ->schema([
                        Forms\Components\TextInput::make('whatsapp_number')
                            ->label('Nomor WhatsApp')
                            ->required()
                            ->tel()
                            ->placeholder('Contoh: 6285750777700'),
                        
                        Forms\Components\Textarea::make('whatsapp_message')
                            ->label('Pesan Default WhatsApp')
                            ->placeholder('Halo, saya tertarik dengan unit di {nama_perumahan}')
                            ->rows(3),
                    ]),

                Forms\Components\Section::make('Gambar Properti')
                    ->schema([
                        Forms\Components\Repeater::make('images')
                            ->relationship()
                            ->label('Slider Gambar')
                            ->schema([
                                Forms\Components\FileUpload::make('image_path')
                                    ->label('Gambar')
                                    ->image()
                                    ->directory('properties')
                                    ->required(),
                                
                                Forms\Components\TextInput::make('description')
                                    ->label('Deskripsi Gambar')
                                    ->placeholder('2 Kamar Tidur, 1 Kamar Mandi, Luas Tanah...'),
                                
                                Forms\Components\TextInput::make('order')
                                    ->label('Urutan')
                                    ->numeric()
                                    ->default(0),
                            ])
                            ->orderColumn('order')
                            ->collapsible()
                            ->itemLabel(fn (array $state): ?string => $state['description'] ?? 'Gambar'),
                    ]),

            // Section Lokasi Strategis (TAMBAHKAN INI SETELAH FASILITAS)
                Forms\Components\Section::make('Lokasi Strategis')
                    ->schema([
                        Forms\Components\Repeater::make('strategicLocations')
                            ->label('Lokasi Strategis')
                            ->relationship()
                            ->schema([
                                Forms\Components\TextInput::make('description')
                                    ->label('Deskripsi Lokasi')
                                    ->required(),
                                Forms\Components\TextInput::make('order')
                                    ->label('Urutan')
                                    ->numeric()
                                    ->default(0),
                            ])
                            ->orderColumn('order')
                            ->collapsible()
                            ->itemLabel(fn (array $state): ?string => $state['description'] ?? 'Lokasi')
                            ->minItems(1)
                            ->maxItems(20),
                    ]),

                // Tambahkan section fasilitas di bawah gambar properti
                Forms\Components\Section::make('Fasilitas')
                    ->schema([
                        Forms\Components\Repeater::make('facilities')
                            ->label('Fasilitas')
                            ->relationship()
                            ->schema([
                                Forms\Components\Select::make('icon')
                                    ->label('Icon Fasilitas')
                                    ->options([
                                        'fas fa-home' => 'Rumah',
                                        'fas fa-car' => 'Mobil',
                                        'fas fa-swimming-pool' => 'Kolam Renang',
                                        'fas fa-tree' => 'Taman',
                                        'fas fa-wifi' => 'WiFi',
                                        'fas fa-bed' => 'Tempat Tidur',
                                        'fas fa-bath' => 'Kamar Mandi',
                                        'fas fa-parking' => 'Parkir',
                                        'fas fa-shield-alt' => 'Keamanan',
                                        'fas fa-store' => 'Mini Market',
                                        'fas fa-utensils' => 'Ruang Makan',
                                        'fas fa-dumbbell' => 'Gym',
                                        'fas fa-bus' => 'Akses Transportasi',
                                        'fas fa-school' => 'Dekat Sekolah',
                                        'fas fa-hospital' => 'Dekat Rumah Sakit',
                                        'fas fa-mosque' => 'Mushola',
                                        'fas fa-church' => 'Gereja',
                                        'fas fa-bolt' => 'Listrik',
                                        'fas fa-water' => 'Air Bersih',
                                        'fas fa-cctv' => 'CCTV',
                                        'fas fa-lock' => 'One Gate System',
                                        'fas fa-fire-extinguisher' => 'Pemadam',
                                        'fas fa-leaf' => 'Lingkungan Asri',
                                        'fas fa-road' => 'Jalan Lebar',
                                        'fas fa-bicycle' => 'Jalur Sepeda',
                                        'fas fa-child' => 'Taman Bermain',
                                        'fas fa-dog' => 'Pet Friendly',
                                        // Tambahkan lagi sesuai kebutuhan
                                    ])
                                    ->searchable()
                                    ->required(),
                                Forms\Components\TextInput::make('description')
                                    ->label('Deskripsi')
                                    ->required(),
                                Forms\Components\TextInput::make('order')
                                    ->label('Urutan')
                                    ->numeric()
                                    ->default(0),
                            ])
                            ->orderColumn('order')
                            ->collapsible()
                            ->itemLabel(fn (array $state): ?string => $state['description'] ?? 'Fasilitas')
                            ->minItems(1)
                            ->maxItems(20),
                    ]),

                Forms\Components\Section::make('Pengaturan Tampilan')
                    ->schema([
                        Forms\Components\TextInput::make('order')
                            ->label('Urutan Tampil')
                            ->numeric()
                            ->default(0)
                            ->helperText('Semakin kecil angka, semakin atas posisinya'),
                        
                        Forms\Components\Toggle::make('is_active')
                            ->label('Aktif')
                            ->default(true)
                            ->helperText('Nonaktifkan untuk menyembunyikan properti ini dari website'),
                    ])->columns(2),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('order')
                    ->label('Urutan')
                    ->sortable(),
                
                Tables\Columns\TextColumn::make('name')
                    ->label('Nama Perumahan')
                    ->searchable()
                    ->sortable(),
                
                Tables\Columns\TextColumn::make('location')
                    ->label('Lokasi')
                    ->searchable(),
                
                Tables\Columns\TextColumn::make('type')
                    ->label('Tipe'),
                
                Tables\Columns\IconColumn::make('is_active')
                    ->label('Status')
                    ->boolean(),
                
                Tables\Columns\TextColumn::make('created_at')
                    ->label('Dibuat')
                    ->dateTime()
                    ->sortable()
                    ->toggleable(isToggledHiddenByDefault: true),
            ])
            ->defaultSort('order')
            ->filters([
                Tables\Filters\TernaryFilter::make('is_active')
                    ->label('Status')
                    ->placeholder('Semua')
                    ->trueLabel('Aktif')
                    ->falseLabel('Nonaktif'),
            ])
            ->actions([
                Tables\Actions\EditAction::make(),
                Tables\Actions\DeleteAction::make(),
            ])
            ->bulkActions([
                Tables\Actions\BulkActionGroup::make([
                    Tables\Actions\DeleteBulkAction::make(),
                ]),
            ]);
    }

    public static function getRelations(): array
    {
        return [
            //
        ];
    }

    public static function getPages(): array
    {
        return [
            'index' => Pages\ListProperties::route('/'),
            'create' => Pages\CreateProperty::route('/create'),
            'edit' => Pages\EditProperty::route('/{record}/edit'),
        ];
    }
}